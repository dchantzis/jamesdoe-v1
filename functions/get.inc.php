<?php
//FUNCTION THAT GET DATA FROM DB


function news_get()
{
	
	  require ( "config.inc.php");
	  @mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die('Cannot connect to specified host with this DB user');
	  @mysql_select_db(DB_DATABASE) or die('Cannot select the database');
	  
	  $query = "SELECT id, u_date, headline, notes FROM updates ORDER BY u_date DESC;";
	  $result = @mysql_query($query);
	  $num = @mysql_num_rows($result);
	  
	  if($num != 0)
	  {
		  for($j=0; $j<$num; $j++)
		  {
			  $newsArray[$j]['id'] = @mysql_result($result,$j,'id');
			  $newsArray[$j]['u_date'] = @mysql_result($result,$j,'u_date');
			  $newsArray[$j]['headline'] = @mysql_result($result,$j,'headline');
			  $newsArray[$j]['notes'] = @mysql_result($result,$j,'notes');
		  }//
	  }else{}//no query result
		
	if($num == 0)
	{
		echo 'No news entries where found.';
	}//if($num == 0)
	else if($num != 0)
	{
?>
        <div id="" class="entries">
<?
		$col_count = 1;
		for($i=0;$i<$num;$i++)
		{
			if($col_count == 1)
			{
				echo '<div class="col">';
			}//if
?>            
			<div>
                <span class='u_headline'><?= $newsArray[$i]['headline']?></span>
                <span class='u_timestamp'>published: <?=convertTimeStamp($newsArray[$i]['u_date'],"reallyshortwithtime")?></span>
                <span class='u_body'><?= $newsArray[$i]['notes']?></span>
            </div>
<?
			$col_count++;
			if(($col_count == 5) || ($i == $num-1))
			{
				$col_count = 1;
            	echo "</div>";
			}//if		
		}//for
?>
		</div>
<?		
	}//else if
		
}//news_get()

function links_get()
{
	require ( "config.inc.php");
	@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die('Cannot connect to specified host with this DB user');
	@mysql_select_db(DB_DATABASE) or die('Cannot select the database');
	
	$query = "SELECT l.id, l.name, l.url, t.name as category FROM links l, linksToTypes ltt, linkTypes t WHERE l.id = ltt.l_id AND ltt.t_id = t.id ORDER BY  l.id ASC;";
	$result = @mysql_query($query);
	$num = @mysql_num_rows($result);
	
	if($num != 0)
	{
		for($j=0; $j<$num; $j++)
		{
			$tempCategoryName = strtolower(@mysql_result($result,$j,'category'));
			$tempLinkID = @mysql_result($result,$j,'id');
			$tempLinkName = @mysql_result($result,$j,'name');
			$tempLinkURL = @mysql_result($result,$j,'url');
			$linksArray[$tempCategoryName][$tempLinkURL] = $tempLinkName;
		}//
	}else{}//no query result
	
	if($num == 0)
	{
		echo 'No links where found.';
	}//if($num == 0)
	else if($num != 0)
	{
?>
        <div id="" class="entries">

			<div class="col">
        	<div class="link_category">favorites</div>
<?
			reset($linksArray['favourites']);
			while(list($key, $val) = each ($linksArray['favourites']))
			{      
				echo '<span><a href="http://'.$key.'" target="_new">'.$val.'</a></span>';
			}//
?>
			</div><!--col-->
            
            <div class="col">
        	<div class="link_category">artists</div>
<?
			reset($linksArray['artists']);
			while(list($key, $val) = each ($linksArray['artists']))
			{      
				echo '<span><a href="http://'.$key.'" target="_new">'.$val.'</a></span>';
			}//
?>
			</div><!--col-->
            
            <div class="col aligncenter">
        	<div class="link_category">writers</div>
<?
			reset($linksArray['writers']);
			while(list($key, $val) = each ($linksArray['writers']))
			{      
				echo '<span><a href="http://'.$key.'" target="_new">'.$val.'</a></span>';
			}//
?>
			</div><!--col-->
            
            <div class="col alignright">
        	<div class="link_category">comics</div>
<?
			reset($linksArray['comics']);
			while(list($key, $val) = each ($linksArray['comics']))
			{      
				echo '<span><a href="http://'.$key.'" target="_new">'.$val.'</a></span>';
			}//
?>
			</div><!--col-->
            
            <div class="col alignright">
        	<div class="link_category">misc.</div>
<?
			reset($linksArray['misc.']);
			while(list($key, $val) = each ($linksArray['misc.']))
			{      
				echo '<span><a href="http://'.$key.'" target="_new">'.$val.'</a></span>';
			}//
?>
			</div><!--col-->
            
		</div><!--entries-->
<?		
	}//else if
	
	
}//links_get()

function gallery_get($type)
{

	require ( "config.inc.php");
	@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die('Cannot connect to specified host with this DB user');
	@mysql_select_db(DB_DATABASE) or die('Cannot select the database');
	
	switch($type)
	{
		case "illustrations":
			$type="1";
			$images_width = "140";
			$classname = "illustrations";
			break;
		case "sketches":
			$type="2";
			$images_width = "140";
			$classname = "sketches";
			break;
		default:
			$type="1";
			$images_width = "140";
			$classname = "illustrations";
			break;
	}//switch
	
	$query = "SELECT i.id, i.name, i.url, i.comments, i.p_date, i.year FROM images i, imagesToTypes t WHERE t.i_id = i.id AND t.t_id='".$type."' ORDER BY i.p_date DESC;";
	$result = @mysql_query($query);
	$num = @mysql_num_rows($result);

	if($num != 0)
	{
		for($j=0; $j<$num; $j++)
		{
			$imagesArray[$j]['id'] = @mysql_result($result,$j,'id');
			$imagesArray[$j]['name'] = @mysql_result($result,$j,'name');
			$imagesArray[$j]['filename'] = @mysql_result($result,$j,'url');
			$imagesArray[$j]['description'] = @mysql_result($result,$j,'comments');
			$imagesArray[$j]['publisheddate'] = @mysql_result($result,$j,'p_date');
			$imagesArray[$j]['year'] = @mysql_result($result,$j,'year');
		}//
	}else{}//no query result
	
	if($num == 0)
	{
		echo 'No images where found in this category.';
	}//if($num == 0)
	else if($num != 0)
	{
?>
        <div id="<?=$classname?>_entries" class="entries">
<?
		$col_count = 1;
		for($i=0;$i<$num;$i++)
		{
			if($col_count == 1)
			{
				echo '<div class="col">';
			}//if
?>            
			<div class='gallery_thumb'>
                <a href='images/gallery/<?=$imagesArray[$i]['filename']?>' data-title-id='it_<?=$imagesArray[$i]['id']?>' data-fancybox-group="gallery" class="group_<?=$classname?>"/>
                    <img src='images/thumbs/<?=$imagesArray[$i]['filename']?>' width='<?=$images_width?>' height=''  />
                    <div id='it_<?=$imagesArray[$i]['id']?>' class='displaynone'>
                    	<span class='ititle'><?=$imagesArray[$i]['name']?></span> | 
                        <span>Year: <?=$imagesArray[$i]['year']?></span> | 
                        <? if($imagesArray[$i]['description']!=null){ ?>
                        <span class='icaption'>&quot;<?=$imagesArray[$i]['description']?>&quot;</span>
                    	<? } ?>
                    	<div>Uploaded on: <?=convertTimeStamp($imagesArray[$i]['publisheddate'],"reallyshortwithtime")?></div>
                    </div>
                </a> 
            </div>
<?
			$col_count++;
			if(($col_count == 10) || ($i == $num-1))
			{
				$col_count = 1;
            	echo "</div>";
			}//if		
		}//for
?>
		</div>
<?		
	}//else if

}//gallery_get()


function blog_get()
{
	require ( "config.inc.php");
	@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die('Cannot connect to specified host with this DB user');
	@mysql_select_db(DB_DATABASE) or die('Cannot select the database');
	
	$query = "SELECT b.id, b.headline, b.image_id, b.post_date, b.notes, i.url, i.name FROM blog b, images i WHERE b.image_id = i.id ORDER BY b.post_date DESC;";
	$result = @mysql_query($query);
	$num = @mysql_num_rows($result);

	if($num != 0)
	{
		for($j=0; $j<$num; $j++)
		{
			$blogArray[$j]['id'] = @mysql_result($result,$j,'id');
			$blogArray[$j]['headline'] = @mysql_result($result,$j,'headline');
			$blogArray[$j]['image_url'] = @mysql_result($result,$j,'url');
			$blogArray[$j]['post_date'] = @mysql_result($result,$j,'post_date');
			$blogArray[$j]['notes'] = @mysql_result($result,$j,'notes');
			$blogArray[$j]['name'] = @mysql_result($result,$j,'name');
		}//
	}else{}//no query result
	
	if($num == 0)
	{
		echo 'No entries where found in this category.';
	}//if($num == 0)	
	else
	{
		for($j=0;$j<$num;$j++)
		{
			if($j<10){ $className = ""; }else{ $className = "displaynone"; }
?>
		<article class="<?=$className?>">
        	<div class='headline'><?=$blogArray[$j]['headline']?></div>
            <div class='timestamp'><?=convertTimeStamp($blogArray[$j]['post_date'],"shortdaynmonth")?></div>
            <div class='body'><?=$blogArray[$j]['notes']?></div>
            <div class='image'>
            	<img src='images/gallery/<?=$blogArray[$j]['image_url']?>' width="320" title='<?=$blogArray[$j]['name']?>' />
            </div>
        </article>
<?	
		}
	}//elseif
	
	
}//blog_get()

?>