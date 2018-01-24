<?php
vc_map( array(
      "name" => __( "Asif Call to action", "my-text-domain" ),
      "base" => "asif_cta",
      "category" => __( "Asif", "my-text-domain"),
      "params" => array(
         array(
            "type" => "textfield",
            "heading" => __( "Title", "my-text-domain" ),
            "param_name" => "title",            
            "description" => __( "", "my-text-domain" )
         ),
         array(
            "type" => "textfield",
            "heading" => __( "Content", "my-text-domain" ),
            "param_name" => "desc",            
            "description" => __( "", "my-text-domain" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Link type", "my-text-domain" ),
            "param_name" => "type",
            "std" => __( "1", "my-text-domain" ),
            "value" => array (
                'Link to page' => 1,
                'External link' => 2,
            ),
            "description" => __( "", "my-text-domain" ),
         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Link to page", "my-text-domain" ),
            "param_name" => "link_to_page",
            "value" => asif_toolkit_get_page_as_list(),
            "description" => __( "", "my-text-domain" ),
            "dependency" => array (
                'element' => "type",
                'value' => array("1"),
            )
         ),
         array(
            "type" => "textfield",
            "heading" => __( "External Link", "my-text-domain" ),
            "param_name" => "external_link",
            "description" => __( "", "my-text-domain" ),
            "dependency" => array (
                'element' => "type",
                'value' => array("2"),
            )
         ),
         array(
            "type" => "textfield",
            "heading" => __( "Link Text", "my-text-domain" ),
            "param_name" => "link_text",
            "std" => __( "See more", "my-text-domain" ),
            "description" => __( "", "my-text-domain" ),
         ),
      )
   ) );
