<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * TheTravelNet - TTN_html_helper
 *
 
 *
 * @package     TheTravelNet
 

 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause

 */
/**
 * Script
 *
 * Generates a script tage to load javascript
 *
 * @access	public
 * @param	string	javascript location
 * @return	string
 */

if ( ! function_exists('script_tag')) {
    function script_tag($src = '', $language = 'javascript', $type = 'text/javascript', $index_page = FALSE)
    {
        $CI =& get_instance();
        $script = '<scr'.'ipt';
        if (is_array($src)) {
            foreach ($src as $k=>$v) {
                if ($k == 'src' AND strpos($v, '://') === FALSE) {
                    if ($index_page === TRUE) {
                        $script .= ' src="'.$CI->config->site_url($v).'"';
                    }
                    else {
                        $script .= ' src="'.$CI->config->slash_item('base_url').$v.'"';
                    }
                }
                else {
                    $script .= "$k=\"$v\"";
                }
            }

            $script .= "></scr"."ipt>\n";
        }
        else {
            if ( strpos($src, '://') !== FALSE) {
                $script .= ' src="'.$src.'" ';
            }
            elseif ($index_page === TRUE) {
                $script .= ' src="'.$CI->config->site_url($src).'" ';
            }
            else {
                $script .= ' src="'.$CI->config->slash_item('base_url').$src.'" ';
            }

            $script .= 'language="'.$language.'" type="'.$type.'"';
            $script .= ' /></scr'.'ipt>'."\n";
        }
        return $script;
    }
}



/**
 * Image
 *
 * Generates an <img /> element, and allows for HTTPS
 *
 * @access	public
 * @param	mixed
 * @return	string
 */
function img( $src = '', $index_page = FALSE, $base64_encoded = FALSE )
{
	$CI =& get_instance();

	if ( ! is_array($src) )
	{
		$src = array('src' => $src);
	}

	// If there is no alt attribute defined, set it to an empty string
	if ( ! isset($src['alt']))
	{
		$src['alt'] = '';
	}

	$img = '<img';

	foreach ($src as $k=>$v)
	{

		if ($k == 'src' AND strpos($v, '://') === FALSE)
		{
			if( $base64_encoded !== FALSE )
			{
				$img .= ' src="data:image/jpg;base64,'. $v .'"';
			}
			else if ($index_page === TRUE)
			{
				$site_url = $CI->config->site_url( $v );

				if( ! empty( $_SERVER['HTTPS'] ) && strtolower( $_SERVER['HTTPS'] ) !== 'off' )
				{
					if( parse_url( $site_url, PHP_URL_SCHEME ) == 'http' )
					{
						$site_url = substr( $site_url, 0, 4 ) . 's' . substr( $site_url, 4 );
					}
				}

				$img .= ' src="'. $site_url .'"';
			}
			else
			{
				$base_url = $CI->config->slash_item('base_url');

				if( ! empty( $_SERVER['HTTPS'] ) && strtolower( $_SERVER['HTTPS'] ) !== 'off' )
				{
					if( parse_url( $base_url, PHP_URL_SCHEME ) == 'http' )
					{
						$base_url = substr( $base_url, 0, 4 ) . 's' . substr( $base_url, 4 );
					}
				}

				$img .= ' src="'. $base_url . $v .'"';
			}
		}
		else
		{
			// If we are on SSL
			if( $k == 'src' && ! empty( $_SERVER['HTTPS'] ) && strtolower( $_SERVER['HTTPS'] ) !== 'off' )
			{
				// If the image is called via http scheme
				if( stripos( $v, 'https://' ) === FALSE )
				{
					$img .= ' ' . $k . '="' . substr( $v, 0, 4 ) . 's' . substr( $v, 4 ) . '"';
				}
				else
				{
					$img .= " $k=\"$v\"";
				}
			}
			else
			{
				$img .= " $k=\"$v\"";
			}
		}
	}

	$img .= '/>';

	return $img;
}
function addOrdinalNumberSuffix($num) {
    if (!in_array(($num % 100),array(11,12,13))){
      switch ($num % 10) {
        // Handle 1st, 2nd, 3rd
        case 1:  return $num.'st';
        case 2:  return $num.'nd';
        case 3:  return $num.'rd';
      }
    }
    return $num.'th';
}

function multiple_hidden_fields($field_array=array()){
	if(is_array($field_array) && count($field_array)){
		$html="";
		foreach($field_array as $fname=>$fvalue){
			$html.="<input type='hidden' name=".$fname." value=".$fvalue." id=".$fname."_hidden />";
		}
		echo $html;
	}
}


function dateDifferenceTwoDates($start,$end) {
        $end = strtotime($end);//time(); // or your date as well
        $date = strtotime($start);
        $datediff = $end-$date;
        return floor($datediff / (60 * 60 * 24));
    }

if ( ! function_exists('wnanchor'))
{
	/**
	 * Anchor Link
	 *
	 * Creates an anchor based on the local URL.
	 *
	 * @param	string	the URL
	 * @param	string	the link title
	 * @param	mixed	any attributes
	 * @return	string
	 */
	function wnanchor($uri = '', $title = '', $attributes = '')
	{
		$title = (string) $title;

		if ($title === '')
		{
			$title = $uri;
		}

		if ($attributes !== '')
		{
			$attributes = _stringify_attributes($attributes);
		}

		return '<a href="javascript:void(0)"'.$attributes.'>'.$title.'</a>';
	}
}	
// ------------------------------------------------------------------------

/* End of file TTN_html_helper.php */
/* Location: /application/helpers/TTN_html_helper.php */