<div class="content-wrapper">
    <section class="content">
      <div class="row">
<section class="col-lg-3 connectedSortable" >
     	<?php 
   			 echo isset($nav)? $nav : "";
   		 ?>
</section>
<section class="col-lg-9 connectedSortable" style="padding-left: 0px; padding-right: 0px">
    <div style="background-color: white; min-height: 932px">
			<div class="row rowedit">
				<div class="col-md-6">	
					<label style="font-size: 13px;font-weight: 400; margin-left: 5px; padding-top: 15px;"><span style="color: #ccc">Chọn: </span><span style=" color: #5fade0">Tất cả | Bỏ chọn</span> &nbsp; &nbsp; &nbsp; &nbsp;   <span style="color: #ccc">Sắp xếp:</span><span style="color: #5fade0"> Tiềm năng ></span></label>
				</div>
				<div class="col-md-6 hovbtn">
					<button type="button" style="float: right;height: 27px; width: 27px; font-size: 12px;margin-top: 7px;border: 0px;background-color: #f6f6f6;" ><i class="fa fa-print" style="color: #ccc"></i></button>
					<button type="button" style="float: right;margin-right: 7px;height: 27px; width: 27px;margin-top: 7px; font-size: 12px;border: 0px;background-color: #f6f6f6;" ><i class="fa fa-envelope-o" style="color: #ccc"></i></button>
					<button type="button" style="float: right;margin-right: 7px; height: 27px; width: 27px;margin-top: 7px; font-size: 12px;border: 0px;background-color: #f6f6f6;" ><i class="fa fa-star" style="color: #ccc"></i></button>
					<button type="button" style="float: right;margin-right: 7px; height: 27px; width: 27px;margin-top: 7px; font-size: 12px;border: 0px;background-color: #f6f6f6;" > <i class="fa fa-check-circle-o" style="color: #ccc"></i></button>
				</div>
			</div>
			<div style="border: 0.5px solid #ececec;margin-top: 5px;"></div>
				<label style="font-size: 14px;font-weight: 400; color: #ccc;margin-left: 15px;padding-top: 8px">10 Hồ sơ</label>

			<div class="row rowedit" style="padding-top: 5px">
				<?php

				 for($i = 0; $i < count($candidate); $i++)
				{
					?>
					<a href="<?php echo base_url()?>index.php/handling/profile/<?php echo $candidate[$i]['candidateid']?>">
					<div class="col-md-6 profile" style="border: 0.5px solid #ececec; padding-left: 0px; padding-right: 5px">

						<table style="margin-top: 5px; margin-bottom: 5px">
							<tr>
								<td style="vertical-align: top;padding: 2px">
									<input type="checkbox">
								</td>
								<td style="vertical-align: top;padding: 2px">
									<img src="<?php echo base_url()?>public/images/<?php echo $candidate[$i]['imagelink']?>" style="border: 1.5px solid #ececec;" width="70px" height="70px">
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
											<label style="font-size: 16px; font-weight: 600;margin-bottom: 0px;"><?php echo $candidate[$i]['name'] ?></label>
										</div>
										<div class="col-md-5">
											<span style="float: right; margin-bottom: 0px;font-size: 14px;color: #5fade0">Web portal <i class="fa fa-star" style="color: orange"></i></span>
										</div>
									</div>
									<label style="font-size: 14px;margin-bottom: 0px;font-weight: 400;margin-top: -5px; width: 100%">Chuyên viên tuyển dụng - VP BANK</label>
									<label style="font-size: 13px;margin-bottom: 0px;font-weight: 350;color: #5fade0">Tuyển dụng, đào tạo</label>
									<label style="font-size: 14px;margin-bottom: 0px;font-weight: 350;color: #ccc">
										<?php if($candidate['gender'] == "M") echo "Nam"; 
							              else if($candidate['gender'] == "F") echo "Nữ";
							              ?>, <?php echo getAge($candidate['dateofbirth']);
							               ?> tuổi, <?php echo $candidate['height'].'cm/ '.$candidate['weight'].'kg'?>
							                <?php if($experience != null){ 
								                  $secs = strtotime($experience[count($experience)-1]['dateto']) - strtotime($experience[count($experience)-1]['datefrom']);
								                  $days = $secs / 86400;
								                  $month = $days/30;
								                  echo ($month < 1)? "1 tháng kinh nghiệm" : round($month)." tháng kinh nghiệm";
								              }              
								              ?>, 
								              <?php echo number_format($candidate['desirebenefit'])?> VND, 
								              <?php
									              if($knowledge != null){ 
									              foreach($knowledge as $key) {
									                if($key['highestcer'] == "Y")
									                {
									                  echo '<i class="fa fa-star orange" ></i> ';
									                  echo $key['certificate'];
									                  break;
									                }              
									              } }
									              ?>, 
									           <?php 
								                    if($language != null)
								                    {
								                      echo '<i class="fa fa-language orange"></i> ';
								                      if(count($language) == 1)
								                        echo $language[0]['language'];
								                      else if(count($language) == 2)
								                        echo $language[0]['language'].', '.$language[1]['language'];
								                      else
								                      {
								                        echo $language[0]['language'].', '.$language[1]['language'].', +'.(count($language)-2);
								                      }
								                    }
								                ?>,
								                <?php 
								                    if($software != null)
								                    {
								                      echo '<i class="fa fa-laptop orange"></i> ';
								                      if(count($software) == 1)
								                        echo $software[0]['software'];
								                      else if(count($software) == 2)
								                        echo $software[0]['software'].', '.$software[1]['software'];
								                      else
								                      {
								                        echo $software[0]['software'].', '.$software[1]['software'].', +'.(count($software)-2);
								                      }
								                    }
								                ?>   

									</label>
									<span style="font-size: 13px;color: #5fade0">#HighR</span>
								</td>
							</tr>
						</table>

					</div>
				</a>
				<?php } ?>
			
			</div>
			<button type="button" style="border: 0px;height: 30px;color: white;background-color: #5fade0;margin-top: 15px;margin-left: 10px; margin-bottom: 20px;" > Thêm Hồ Sơ</button>
		</div>    	
</section>	

  </div>
    </section>
  </div>