<?php
include "connection.php";

$sql = "SELECT * FROM spmk_info";
$query = $conn->query($sql);
$row = $query->fetch_assoc();
?>
<div class="row">
            <div class="col-md-8 col-sm-8col-xs-12">
               <div class="panel panel-info">
			   
                <div class="panel-body">
                                <form action="kemaskini.php" method="POST">
                                    <hr />
                                        <div class="form-group">
                                            <label>No. Kad Pengenalan</label>
                                            <input  name="no_kp" class="form-control" type="text" value="<?php echo $row['no_kp']?>" >               
                                        </div>
										<div class="form-group">
                                            <label>Nama</label>
                                            <input  name="nama" class="form-control" type="text" value="<?php echo $row['nama']?>">
                                    
                                        </div>
                                           
										<div class="form-group">
                                            <label>Gred</label>
                                            <select name="gred" class="form-control" value="<?php echo $row['gred']?>">
                                                <option>DV52</option>
                                                <option>DV44</option>
                                                <option>DV42</option>
                                                <option>DV41</option>
												<option>DV40</option>
                                                <option>DV38</option>
                                                <option>DV36</option>
                                                <option>DV30</option>
												<option>DV29</option>
                                                <option>DV19</option>
												<option>DG48</option>
                                                <option>DG44</option>
                                                <option>DG41</option>
												<option>S44</option>
                                                <option>S29</option>
												<option>S22</option>
												<option>N29</option>
                                                <option>N22</option>
												<option>N19</option>
                                                <option>N11</option>
												<option>N4</option>
												<option>FT19</option>
                                                <option>J19</option>
												<option>W19</option>
                                                <option>H11</option>
									    </select>
                                        </div>
										<div class="form-group">
                                            <label>E-mel</label>
                                            <input name="emel" class="form-control" type="text" value="<?php echo $row['emel']?>" >
                                        </div>
                                 <input  type="submit" name="submit" value="Submit" class="btn btn-success" value="SIMPAN">
                                       

                                    </form>
                          </div>
						                            </div>
													                          </div>
																			                            </div>