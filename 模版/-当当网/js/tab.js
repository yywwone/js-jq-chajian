// JavaScript Document
//选项卡
			function a1(a)
			{
				for(var j=0;j<4;j++)
					{
						document.getElementById("main_center_tab_body"+j).style.display="none";
						document.getElementById("mytab"+j).className="";
					}
			document.getElementById("main_center_tab_body"+a).style.display="block";
			document.getElementById("mytab"+a).className="active";
			
			}
		