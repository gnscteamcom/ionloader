<?php
/**
 *
 * @ IonCube Priv8 Decoder V1 By H@CK3R $2H  
 *
 * @ Version  : 1,0,0,3
 * @ Author   : H@CK3R $2H  
 * @ Release on : 01-01-2014
 * @ Email  : Hacker.S2h@Gmail.com
 *
 **/

_obfuscate_DQg2IgwzDi8aLwEoJAgiMCEkPQEmFTI�( );
_obfuscate_DQ47DhsdDxU8LDYVGzELFgMTEDUdNTI�( );
require_once( "inc/page.php" );
require_once( "inc/db.php" );
require( "inc/config.php" );
require( "inc/libs/Smarty.class.php" );
$_GET['id'] = $_GET['id'];
$_GET['opt'] = ( integer );
if ( $_GET['opt'] )
{
    $_GET['id'] = $_GET['id']."^".$_GET['opt'];
}
if ( $post_panel_type == 2 )
{
    _obfuscate_DR4MA0pPys4NQc9GScvFxYhNxQuPCI�( "Location: ".$post_panel_webservice_url."/customers/start.php?co_id=".$post_panel_username."&p_id=10&prd_id=".$ppeykid."&pin=".$post_panel_password );
    exit( );
}
if ( $xshop_cart_system == 1 )
{
}
else if ( $xshop_cart_system == 2 )
{
}
switch ( $action )
{
    case "add" :
        if ( $cart )
        {
            $cart .= "|".$_GET['id'];
        }
        else
        {
        }
        break;
    case "delete" :
        if ( $cart )
        {
            $newcart = "";
            foreach ( $items as $item )
            {
                if ( !( $_GET['id'] != $item ) )
                {
                    continue;
                }
                else if ( $newcart != "" )
                {
                    $newcart .= "|".$item;
                }
                else
                {
                }
            }
        }
        break;
    case "update" :
        if ( $cart )
        {
            $newcart = "";
            foreach ( $_POST as $key => $value )
            {
                if ( _obfuscate_DRE8GCRANhQQHlsFMQ4hMiYtITkzFwE�( $key, "qty" ) )
                {
                    $items = $newcart != "" ? _obfuscate_DR87BR4yBhUoGRwwNywfAjwmGQwXOTI�( "|", $newcart ) : _obfuscate_DR87BR4yBhUoGRwwNywfAjwmGQwXOTI�( "|", $cart );
                    $newcart = "";
                    foreach ( $items as $item )
                    {
                        if ( !( $id != $item ) )
                        {
                            continue;
                        }
                        else if ( $newcart != "" )
                        {
                            $newcart .= "|".$item;
                        }
                        else
                        {
                        }
                    }
                    $i = 10;
                    do
                    {
                        if ( $i <= $value )
                        {
                            if ( $newcart != "" )
                            {
                                $newcart .= "|".$id;
                            }
                            else
                            {
                            }
                            ++$i;
                        }
                    } while ( 1 );
                }
            }
        }
}
_obfuscate_DQoUJCNbAxlcODY5Gh0IJxU_Jx4uMQE�( "cart", $cart, _obfuscate_DS8BMDgqEzYhDBQDCzs2Cys8DyUzJiI�( ) + 3600 );
$_SESSION['cart'] = $cart;
_obfuscate_DR4MA0pPys4NQc9GScvFxYhNxQuPCI�( "Location: cart.php" );
?>
