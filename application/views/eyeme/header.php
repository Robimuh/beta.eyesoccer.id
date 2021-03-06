<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title?></title>
   <?php  
   /*
       CSS link tag 

    */
    $style  = CSSPATH.'style.css';
    $bs     = CSSPATH.'bs.css';
    $icon   = 'https://fonts.googleapis.com/icon?family=Material+Icons';

    $link_option = array(
                    'rel'   => 'stylesheet',
                    'type'  => 'text/css');   

    $link_style   = $link_option['href'] = $style; 
    $link_icon    = $link_option['href'] = $icon;
    $link_bs      = $link_option['href'] = $bs;
    /*

        Meta Tag 

    */
    $meta = array(array('name' => 'viewport','content'=> 'width=1000'),
                  array('name' => 'keyword','content'=>'social media bola'));

    echo meta($meta);
    echo link_tag($link_style);
    echo link_tag($link_icon);
    echo link_tag($link_bs);

    
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="center-desktop me-head">
        <div class="w1020 m-0">
            <div class="container">
                <div class="fl-r pd-t-20 p-r">
                    <?php 
                        //icon setting 
                        $icon = array(
                                    array('icon'=> 'camera','link'=> MEURL.'explore','title'=> 'Jelajah'),
                                    array('icon'=> 'notifications_none','link'=> MEURL.'notif','title'=> 'Pemberitahuan'),
                                    array('icon'=> 'camera_alt','link'=> MEURL.'upload','title'=> 'Upload Gambar'),
                                    array('icon'=> 'person_outline','link'=> MEURL.'profile/sofyanwaldy','title'=> 'Profil'));
                        //icon menu 
                        foreach($icon as $k => $v){

                            echo  '<a href="'.$v['link'].'" title="'.$v['title'].'" style="text-decoration:none;">
                            <i class="material-icons ikon">'.$v['icon'].'</i></a>';
                        }

                    ?>
                </div>
            </div>
        </div>
    </div>