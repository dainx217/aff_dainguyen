import Messages from "../../components/_inc_run_message";
import Delete from "../../components/_inc_delete";
$(function (){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    Delete.init()
    Messages.init()
})