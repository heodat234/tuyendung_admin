<div class="row" >
	<div class="col-md-3 padding0">
		<div class="blue" style="height: 40px">
			<ul class="nav nav-tabs" style="padding-top: 10px; padding-left: 10px">
				<li class="active"><a data-toggle="tab" href="#home" style="height: 30px; border-radius: 0px;font-size: 14px;padding-left: 6px; padding-right: 6px;padding-top: 6px;">Đã Lưu (8)</a></li>
				<li ><a data-toggle="tab" href="#menu1" style="height: 30px;border-radius: 0px;font-size: 14px;padding-left: 6px; padding-right: 6px;padding-top: 6px;" >Tiêu chí lọc hồ sơ</a></li>
			</ul>
		</div>
		<div style="background-color: white">	
			<div class="tab-content">
				<div id="home" class="tab-pane fade in active" >
					<i class="fa fa-search" style="padding-left: 5px;margin-top: 13px"></i>
					<input type="text" name="" style="margin-left: 5px;margin-top: 8px; padding-left: 6px; padding-bottom: 2px; padding-top: 3px; width: 235px;font-size: 14px;color: #55595c; background-color: #fff; background-image: none; border: 1px solid #ccc;" placeholder="Tìm kiếm tiêu chí đã lưu">
					<div style="border: 0.5px solid #ececec;margin-top: 8px;"></div>
					<label style="font-weight: 400; font-size: 13px; color:#5fade0;padding-top: 10px;padding-left: 10px" >Chỉnh sửa</label>
					<div class="side-menu" >
						<nav class="navbar navbar-default" role="navigation" style="background-color: white; border: 0px">  
							<div class="side-menu-container">
								<ul class="nav navbar-nav nav-check-save">
									<li id="dropdown" style="width: 100%"><a data-toggle="collapse" href="#dropdown-lvl1" class="nav-menu-hs">Nhân viên kinh doanh Nam (7)</a></li>
									<li id="dropdown" style="width: 100%"><a data-toggle="collapse" href="#dropdown-lvl1" class="nav-menu-hs">Nhân viên kinh doanh Nữ (27)</a></li>
									<li id="dropdown" style="width: 100%"><a data-toggle="collapse" href="#dropdown-lvl1" class="nav-menu-hs">Ứng viên có chiều cao > 1m65 (3)</a></li>
									<li id="dropdown" style="width: 100%"><a data-toggle="collapse" href="#dropdown-lvl1" class="nav-menu-hs">Ứng viên có hơn 2 năm kinh nghiệm (2)</a></li>
									<li id="dropdown" style="width: 100%"><a data-toggle="collapse" href="#dropdown-lvl1" class="nav-menu-hs">Ứng viên yêu cầu mức lương < 10tr (17)</a></li>
								</ul>
							</div>	
						</nav>
					</div>    
				</div>
				<div id="menu1" class="tab-pane fade">
					<i class="fa fa-search" style="padding-left: 5px;margin-top: 13px"></i>
					<input type="text" name="" style="margin-left: 5px;margin-top: 8px; padding-left: 6px; padding-bottom: 2px; padding-top: 3px; width: 235px;font-size: 14px;color: #55595c; background-color: #fff; background-image: none; border: 1px solid #ccc;" placeholder="Tìm kiếm">
					<div style="border: 0.5px solid #ececec;margin-top: 8px;"></div>

					<div class="checkbox" style="padding-left: 10px;font-size: 14px;font-weight: 400;">
						<label><input type="checkbox" value="">Chọn tất cả hồ sơ (10)</label> 
					</div>

					<?php 
					echo isset($nav)? $nav : "";
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-9" style="padding-right: 0px"> 	
		<div style="background-color: white">
			<div class="row">
				<div class="col-md-6">	
					<label style="font-size: 13px;font-weight: 400; margin-left: 5px; padding-top: 15px;"><span style="color: #ccc">Chọn: </span><span style=" color: #5fade0">Tất cả | Bỏ chọn</span> &nbsp; &nbsp; &nbsp; &nbsp;   <span style="color: #ccc">Sắp xếp:</span><span style="color: #5fade0"> Tiềm năng ></span></label>
				</div>
				<div class="col-md-6">
					<button type="button" style="float: right;height: 27px; width: 80px; font-size: 12px;margin-top: 5px;border: 0px;background-color: #f6f6f6;" > Tiềm năng ></button>
					<button type="button" style="float: right;margin-right: 7px;height: 27px; width: 80px;margin-top: 5px; font-size: 12px;border: 0px;background-color: #f6f6f6;" > Gửi thư ></button>
					<button type="button" style="float: right;margin-right: 7px; height: 27px; width: 80px;margin-top: 5px; font-size: 12px;border: 0px;background-color: #f6f6f6;" > Thao tác ></button>
				</div>
			</div>
			<div style="border: 0.5px solid #ececec;margin-top: 5px;"></div>
				<label style="font-size: 14px;font-weight: 400; color: #ccc;margin-left: 15px;padding-top: 8px">10 Hồ sơ</label>

			<div class="row" style="padding-top: 5px">
				<?php for($i=0; $i <5;$i++)
				{
					?>
					<div class="col-md-6" style="border: 0.5px solid #ececec; padding-left: 0px">

						<table style="margin-top: 5px; margin-bottom: 5px">
							<tr>
								<td style="vertical-align: top;padding: 2px">
									<input type="checkbox">
								</td>
								<td style="vertical-align: top;padding: 2px">
									<img src="<?php echo base_url()?>public/images/2.jpg" style="border: 1.5px solid #ececec;" width="70px" height="70px">
									<label style="font-size: 12px;font-weight: 400;margin-bottom: 0px; color: #5fade0; padding-top: 3px">80 điểm</label>
									<label style="font-size: 12px;font-weight: 400;margin-bottom: 0px; color: #5fade0;padding-top: 1px">3 mẩu thư</label>
									<label style="margin-top: -3px">
										<i class="fa fa-bell" style="padding-right: 10px;font-size: 12px;padding-left: 2px;color: #ccc"></i>
										<i class="fa fa-user" style="padding-right: 10px;font-size: 12px;color: #ccc"></i>
										<i class="fa fa-clock-o" style="font-size: 14px;color: #ccc"></i>
									</label>
								</td>
								<td style="vertical-align: top;padding: 2px">
									<div class="row" >
										<div class="col-md-7">
											<label style="font-size: 15px; font-weight: 550;">Nguyễn Huy Hoàng</label>
										</div>
										<div class="col-md-5">
											<span style="float: right; margin-bottom: 0px;font-size: 13px;color: #5fade0">web portal <i class="fa fa-star" style="color: orange"></i></span>
										</div>
									</div>
									<label style="font-size: 13px;margin-bottom: 0px;font-weight: 350;margin-top: -5px">Chuyên viên tuyển dụng - VP BANK</label>
									<label style="font-size: 13px;margin-bottom: 0px;font-weight: 350;color: #5fade0">Tuyển dụng, đào tạo</label>
									<label style="font-size: 13px;margin-bottom: 0px;font-weight: 350;color: #ccc">Nam, 27 tuổi, 1m75, 70kg, 8 năm kinh nghiệm, mức lương 30 - 50 tr(VND), Cử nhân hành chính Nhân sự +3..., Tiếng Anh +2, MS OFfice +3,...</label>
									<span style="font-size: 13px;color: #5fade0">#HighR</span>
								</td>
							</tr>
						</table>

					</div>
				<?php } ?>
			
			</div>
			<button type="button" style="border: 0px;height: 30px;color: white;background-color: #5fade0;margin-top: 15px;margin-left: 10px; margin-bottom: 20px;" > Thêm Hồ Sơ</button>
		</div>
	</div>
</div>


