<?php


ini_set('display_errors', 1); 
include('simple_html_dom.php');

class Faculty extends simple_html_dom
{
	public $faculty_members;
	public $base_url;
	private $faculty_info;
	private $faulty_thumb_srcs;
	private $faculty_category = array(
		"administrative"=>array (47),
		"full-time"=>array (128, 153, 129, 52, 22, 134, 91, 32, 90, 27, 42, 66, 41, 154, 155, 45, 33, 157, 73, 98, 150),
		"joint"=>array (173, 58, 72, 62, 53),
		"part-time"=>array (166, 130, 165, 51, 37, 82, 158, 56, 108, 100, 124, 34, 146, 135, 11, 115, 117, 14, 152, 48),
		"assistant-instructor"=>array (160, 162, 151, 159, 143),
		"emeritus"=>array (21, 26, 43, 44, 35, 40, 46, 171)
	);
	
	function __construct ($base_url, $page=NULL)
	{
		
		if (!$page) 
			parent::__construct($base_url);
    else 
    	parent::__construct($base_url.$page);
    
		$this->base_url = $base_url;
		
		$this->faculty_info = $this->get_faculty_info();
		$this->faculty_thumb_srcs = $this->get_faculty_thumb_srcs();
		
		$this->faculty_members = array_map(
			array($this, "merge_obj_arrays"), 
			$this->faculty_info, 
			$this->faculty_thumb_srcs 
		);
		
		
	}
	
	
	function remove_HTML($s , $keep = '' , $expand = 'script|style|noframes|select|option'){
        /**///prep the string
        $s = ' ' . $s;
        /**///initialize keep tag logic
        if(strlen($keep) > 0){
            $k = explode('|',$keep);
            for($i=0;$i<count($k);$i++){
                $s = str_replace('<' . $k[$i],'[{(' . $k[$i],$s);
                $s = str_replace('</' . $k[$i],'[{(/' . $k[$i],$s);
            }
        }
       
        //begin removal
        /**///remove comment blocks
        while(stripos($s,'<!--') > 0){
            $pos[1] = stripos($s,'<!--');
            $pos[2] = stripos($s,'-->', $pos[1]);
            $len[1] = $pos[2] - $pos[1] + 3;
            $x = substr($s,$pos[1],$len[1]);
            $s = str_replace($x,'',$s);
        }
       
        /**///remove tags with content between them
        if(strlen($expand) > 0){
            $e = explode('|',$expand);
            for($i=0;$i<count($e);$i++){
                while(stripos($s,'<' . $e[$i]) > 0){
                    $len[1] = strlen('<' . $e[$i]);
                    $pos[1] = stripos($s,'<' . $e[$i]);
                    $pos[2] = stripos($s,$e[$i] . '>', $pos[1] + $len[1]);
                    $len[2] = $pos[2] - $pos[1] + $len[1];
                    $x = substr($s,$pos[1],$len[2]);
                    $s = str_replace($x,'',$s);
                }
            }
        }
       
        /**///remove remaining tags
        while(stripos($s,'<') > 0){
            $pos[1] = stripos($s,'<');
            $pos[2] = stripos($s,'>', $pos[1]);
            $len[1] = $pos[2] - $pos[1] + 1;
            $x = substr($s,$pos[1],$len[1]);
            $s = str_replace($x,'',$s);
        }
       
        /**///finalize keep tag
        for($i=0;$i<count($k);$i++){
            $s = str_replace('[{(' . $k[$i],'<' . $k[$i],$s);
            $s = str_replace('[{(/' . $k[$i],'</' . $k[$i],$s);
        }
       
        return trim($s);
    }
	
	
	
	protected function merge_obj_arrays($a, $b, $c=NULL, $d=NULL, $e=NULL)
	{
		return (object) array_merge((array)$a, (array)$b, (array)$c, (array)$d, (array)$e); 
	}
	
	function get_faculty_thumbs()
	{
		return $this->find('div[id="content"] img');
		
	}
	
	function get_faculty_thumb_srcs()
	{
		$thumbs = $this->get_faculty_thumbs();
		foreach ($thumbs as $thumb)
		{
			if( !preg_match('/http:\/\/www\.ischool\.utexas\.edu/', $thumb->src) )
				$src = $this->base_url.$thumb->src;
			else
				$src = $thumb->src;
			$srcs[] = (object) array("src" => $src);
		}
		return $srcs;
		
	}
	
	function get_faculty_info()
	{
		$thumbs = $this->get_faculty_thumbs();
		foreach ($thumbs as $thumb)
		{
			$name = $thumb->parent()->parent()->next_sibling()->children(0)->plaintext;
			$name = trim( $name );
			$email = $thumb->parent()->parent()->next_sibling()->children(2)->outertext;
			$email = trim( $email );
			$href = $this->base_url.'/people/'.$thumb->parent()->href;
			
			preg_match('/(?<=PersonID\=)\d\d\d?\d?/', $href, $match);
			$person_id = $match[0];
			
			foreach ($this->faculty_category as $c => $id_set)
			{	if (in_array($person_id, $id_set))
				{ $category = $c; break; }
			}
			
			$info = $thumb->parent()->parent()->next_sibling();
			$info = $this->remove_HTML($info, "b");
			$info = preg_split('/(<br>\s+<br \/>|<br>)/', $info);
			$title = preg_replace('/<b>.*<\/b>\s?-?\s?/', '', $info[0]);
			//$title = $info[0];
			$phone_num = trim($info[1]);
			$office = trim($info[2]);
			//$title = str_replace( "<br>", "%", $title );
				
			$info_sets[] = (object) array("_id"=>"p".$person_id, "href" => $href, "name" => $name, "email" => $email, "title" => $title, "phone" => $phone_num, "office" => $office, "person_id" => $person_id, "category"=>$category);
			
		}
		return $info_sets;
	}
	

} // end of Faculty class
?>
