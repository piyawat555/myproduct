$(document).ready(function(){
    $('.deleteform').click(function(evt){
        
        var name =$(this).data("name");
        var form =$(this).closest("form");
        evt.preventDefault();
        swal({
            title : `ต้องการลบข้อมูลสิ้นค้า ${name} ใช่หรือไม่ ?`,
            text : "ถ้าลบไปแล้วไม่สามารถกู้คืนได้",
            icon : "warning",
            buttons: ["ไม่", "ใช่"],
        }).then((willDelete)=>{
            if(willDelete){
            
                form.submit();
               
            }
        })
    });
});

$(document).ready(function(){
    $('.editform').click(function(evt){
        
        var name =$(this).data("name");
        var form =$(this).closest("form");
      
        evt.preventDefault();
        swal({
            title : `ต้องการแก้ไขข้อมูลสิ้นค้า ${name} ใช่หรือไม่ ?`,
            text : "สามารถแก้ไขหรือเปลี่ยนรูปได้",
            icon : "info",
            buttons: ["ไม่", "ใช่"],
        }).then((willDelete)=>{
            if(willDelete){
                
                form.submit();
              
            }
        })
    });
});

$(document).ready(function(){
    $('#btnaddimg').click(function(evt){
        
      
        var form =$(this).closest("form");
      
        evt.preventDefault();
        swal({
            title : `คุณต้องการสั่งซื้อสินค้าใช่หรือไม่ ?`,
            text : "ระบบจะส่งข้อมูลการสั่งสินค้าของคุณเพื่อให้แอดมินตรวจสอบความถูกต้อง",
            icon : "info",
            buttons: ["ไม่", "ใช่"],
        }).then((willDelete)=>{
            if(willDelete){
                
                form.submit();
              
            }
        })
    });
});

$(document).ready(function(){
    $('#btnsent').click(function(evt){
        
      
        var form =$(this).closest("form");
      
        evt.preventDefault();
        swal({
            title : `ต้องการเพิ่มสินค้านี้ใช่หรือไม่ ?`,
            
            icon : "info",
            buttons: ["ไม่", "ใช่"],
            // successMode:"ไม่"
        }).then((willDelete)=>{
            if(willDelete){
                
                form.submit();
              
            }
        })
    });
});


$(document).ready(function(){
    $('.removecart').click(function(evt){
        
      
        var form =$(this).closest("form");
      
        evt.preventDefault();
        swal({
            title : `ต้องการนำสินค้านี้ออกใช่หรือไม่ ?`,
            
            icon : "info",
            buttons: ["ไม่", "ใช่"],
       
        }).then((willDelete)=>{
            if(willDelete){
                
                form.submit();
              
            }
        })
    });
});


$(document).ready(function(){
    $('#allowadmin').click(function(evt){
        
      
        var form =$(this).closest("form");
      
        evt.preventDefault();
        swal({
            title : `ตรวจสอบข้อมูลสินค้าเสร็จเรียบร้อยและจะอนุมัติการส่งสินค้าใช่หรือไม่ ?`,
            text : "เมื่ออนุมัติแล้วระบบจะทำการแจ้งสถานะการส่งสินค้าไปยังผู้สั่งสินค้า",
            icon : "info",
            buttons: ["ไม่", "ใช่"],
        }).then((willDelete)=>{
            if(willDelete){
                
                form.submit();
              
            }
        })
    });
});

$(document).ready(function(){
    $('#admindontallowproduct').click(function(evt){
        
      
        var form =$(this).closest("form");
      
        evt.preventDefault();
        swal({
            title : `ตรวจสอบข้อมูลสินค้าเสร็จเรียบร้อยและจะไม่อนุมัติการส่งสินค้าใช่หรือไม่ ?`,
            text : "เมื่อไม่อนุมัติระบบจะทำการแจ้งสถานะ(สินค้าไม่ถูกอนุมัติ)ไปยังผู้สั่งสินค้า",
            icon : "info",
            buttons: ["ไม่", "ใช่"],
        }).then((willDelete)=>{
            if(willDelete){
                
                form.submit();
              
            }
        })
    });
});