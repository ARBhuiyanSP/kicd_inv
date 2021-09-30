/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$("#parent_item_added_form_value").validate({
        rules: {
            add_category_id : "required",
            add_name        : "required"
        },
        messages: {
            add_category_id : "Please specify Category",
            add_name        : "Please specify Name",

        }
    })
