<?php
namespace ACFFlexFields;

class Team_Member_CPT
{
    public static function setupTeamMembers()
    {
        self::createTeamMemberPostType();
        self::createTeamMemberCategory();
        self::addTeamMemberACF();
    }

    public static function createTeamMemberCategory()
    {
        $args = array (
            'labels' => array(
                'name' => 'Team Member Categories',
                'singular_name' => 'Team Member Category',
                'all_items' => 'All Team Member Categories',
                'edit_item' => 'Edit Team Member Categories',
                'view_item' => 'View Team Member Category',
                'update_item' => 'Update Team Member Category',
                'add_new_item' => 'Add New Team Member Category',
            ),
            'show_ui' => true,
            'hierarchical' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'capabilities' => array(
                'manage_terms', 'edit_terms', 'delete_terms', 'assign_terms'
            ),

        );
        register_taxonomy('team_category', array('team'), $args);
    }

    public static function createTeamMemberPostType()
    {
        register_post_type( 'team',
            array(
                'labels' => array(
                    'name' => __( 'Team Members' ),
                    'singular_name' => __( 'Team Member' )
                ),
                'public' => true,
                'show_ui' => true,
                'show_in_nav_menus' => false,
                'show_in_menu' => true,
                'has_archive' => false,
                'menu_icon' => 'dashicons-lightbulb',
                'taxonomies' => array( 'team-type' ),
                'supports' => array( 'title', 'custom-fields','thumbnail', 'page-attributes' ),
            )
        );
    }

    public static function addTeamMemberACF()
    {
        if( function_exists('acf_add_local_field_group') ):

            acf_add_local_field_group(array(
                'key' => 'group_team_member',
                'title' => 'Team Member',
                'fields' => array(
                    array(
                        'key' => 'field_team_job_position',
                        'label' => 'Job Position',
                        'name' => 'team_job_position',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_team_bio',
                        'label' => 'Bio',
                        'name' => 'team_bio',
                        'type' => 'wysiwyg',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'tabs' => 'all',
                        'toolbar' => 'full',
                        'media_upload' => 1,
                        'delay' => 0,
                    ),
                    array(
                        'key' => 'field_team_email',
                        'label' => 'Email',
                        'name' => 'team_email',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '50',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_team_phone',
                        'label' => 'Phone',
                        'name' => 'team_phone',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '50',
                            'class' => '',
                            'id' => 'custom-phone-input',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_team-social-icons',
                        'label' => 'Social Icons',
                        'name' => 'team_social_icons',
                        'type' => 'repeater',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'collapsed' => '',
                        'min' => 0,
                        'max' => 0,
                        'layout' => 'table',
                        'button_label' => '',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_social_link',
                                'label' => 'Social Link',
                                'name' => 'social_link',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                            array(
                                'key' => 'field_social_icon',
                                'label' => 'Social Icon',
                                'name' => 'social_icon',
                                'type' => 'text',
                                'instructions' => 'Please put in Font Awesome class name',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                        ),
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'team',
                        ),
                    ),
                ),
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => 1,
                'description' => '',
            ));

        endif;
    }
}

?>