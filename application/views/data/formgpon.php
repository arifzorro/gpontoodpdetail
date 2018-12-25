<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>ADD DATA GPON<small>tambah data</small></h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br>
            <form data-parsley-validate
                  class="form-horizontal form-label-left"
                  method="post"
                  action="<?php isset($data->id) ? route("data/save", $data->id): route("data/save"); ?>"
            >

<!--                <div class="form-group">-->
<!--                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Vendor-->
<!--                    </label>-->
<!--                    <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                        <input disabled value="--><?php //echo $vendor->nama?><!--" type="text" required class="form-control col-md-7 col-xs-12">-->
<!--                        <input name="vendor_id" type="hidden" value="--><?php //echo $vendor->id; ?><!--">-->
<!--                    </div>-->
<!--                </div>-->
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal create
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <input value="<?php show_ifset($data->tanggal, date('d-m-Y'), true); ?>" type="text" name="tanggal" required class="datepicker form-control col-md-7 col-xs-12">
                    </div>
                </div>
<!--                <div class="form-group">-->
<!--                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">soal</label>-->
<!--                    <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                        <textarea value="" class="form-control" rows="5" name="soal" required>--><?php //show_ifset($data->soal);?><!--</textarea>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">IPGPON</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="<?php show_ifset($data->ipgpon);?>"
                               class="form-control col-md-7 col-xs-12"
                               type="text" name="ipgpon" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tipe</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="heard" class="form-control" required="" name="tipe_gpon">
                            <option value=""><?php show_ifsetoption($data->tipe_gpon)?></option>
                            <option value="ALU" name="ZTE">ZTE</option>
                            <option value="ALU" name="ZTE">ALU</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Modul</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="<?php show_ifset($data->modul);?>"
                               class="form-control col-md-7 col-xs-12"
                               type="text" name="modul" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Slot</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="<?php show_ifset($data->slot);?>"
                               class="form-control col-md-7 col-xs-12"
                               type="text" name="slot" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Port</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="<?php show_ifset($data->port);?>"
                               class="form-control col-md-7 col-xs-12"
                               type="text" name="port" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Ruangan EA</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="<?php show_ifset($data->ruang_ea);?>"
                               class="form-control col-md-7 col-xs-12"
                               type="text" name="ruang_ea" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Slot FTB ea</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="<?php show_ifset($data->slot_ftbea);?>"
                               class="form-control col-md-7 col-xs-12"
                               type="text" name="slot_ftbea" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Port FTB ea</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="<?php show_ifset($data->port_ftbea);?>"
                               class="form-control col-md-7 col-xs-12"
                               type="text" name="port_ftbea" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Ruangan OA</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="<?php show_ifset($data->ruang_oa);?>"
                               class="form-control col-md-7 col-xs-12"
                               type="text" name="ruang_oa" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Slot FTB OA</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="<?php show_ifset($data->slot_ftboa);?>"
                               class="form-control col-md-7 col-xs-12"
                               type="text" name="slot_ftboa" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Port FTB OA</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="<?php show_ifset($data->port_ftboa);?>"
                               class="form-control col-md-7 col-xs-12"
                               type="text" name="port_ftboa" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">STO</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="heard" class="form-control" required="" name="sto">
                            <option value=""><?php show_ifsetoption($data->sto)?></option>
                            <option value="MTR" name="MTR">MTR</option>
                            <option value="SWE" name="SWE">SWE</option>
                            <option value="SGG" name="SGG">SGG</option>
                            <option value="GER" name="GER">GER</option>
                            <option value="PRY" name="PRY">PRY</option>
                            <option value="SEL" name="SEL">SEL</option>
                            <option value="MBG" name="MBG">MBG</option>
                            <option value="SBW" name="SBW">SBW</option>
                            <option value="BIM" name="BIM">BIM</option>
                            <option value="ALA" name="ALA">ALA</option>
                            <option value="MLK" name="MLK">MLK</option>
                            <option value="TET" name="TET">TET</option>
                            <option value="TLW" name="TLW">TLW</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">ODC</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="<?php show_ifset($data->odc);?>"
                               class="form-control col-md-7 col-xs-12"
                               type="text" name="odc" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">List ODP</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="<?php show_ifset($data->listodp);?>"
                               class="form-control col-md-7 col-xs-12"
                               type="text" name="listodp" required>
                    </div>
                </div>

<!--                <div class="form-group">-->
<!--                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">kategori</label>-->
<!--                    <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                        <select class="custom-select d-block w-100" id="state" required="">-->
<!--                            <option name="tkp">TKP</option>-->
<!--                            <option name="twk">TWK</option>-->
<!--                        </select>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="form-group">-->
<!--                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">No Telp. Pelanggan</label>-->
<!--                    <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                        <input value="--><?php //show_ifset($data->pelanggan_telepon); ?><!--"-->
<!--                               class="form-control col-md-7 col-xs-12"-->
<!--                               type="text" name="pelanggan_telepon">-->
<!--                    </div>-->
<!--                </div>-->



                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Pelaksana <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="pelaksana" type="text" value="<?php show_ifset($data->pelaksana, $this->auth->get_name()); ?>" class="date-picker form-control col-md-7 col-xs-12" required>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="button" class="btn btn-primary" onclick="location.reload()">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>