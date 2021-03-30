@extends('layouts.admin')
@section('content')
	<form>
		@csrf
	    <h4 class="c-grey-900 mB-30">{{ $title }}</h4>
		<div class="row" style="background-color: #E5FFFF;">
			<div class="col-4">
				<div class="form-group mt-2">
					<label class="label font-weight-bold">*Pelanggan</label>
					<select class="js-example-basic-single form-control" id="pelanggan" name="customers_id">
					  
					</select>
				</div>
			</div>
			<div class="col-2">
				<div class="form-group mt-2">
					<label class="label font-weight-bold">E-mail</label>
					<input type="email" class="form-control" name="">
				</div>
			</div>
			<div class="col-2"></div>
			<div class="col-4">
				<div class="form-group float-right mt-4">
					<h4>Total Rp. 50.000.000</h4>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label class="label font-weight-bold">Alamat</label>
					<textarea class="form-control"></textarea>
				</div>
			</div>

			<div class="col-sm-2">
				<div class="form-group">
					<label class="label font-weight-bold">*Tanggal</label>
					<input class="form-control tgl" name="tanggal">
				</div>
				<div class="form-group">
					<label class="label font-weight-bold">Jatuh tempo</label>
					<input class="form-control tgl" name="overdue">
				</div>
				<div class="form-group">
					<label class="label font-weight-bold">*Batas pembayaran</label>
					<select class="js-example-basic-single form-control" id="terms" name="terms" width="50%">
					  <option value="AL">30 hari</option>
					  <option value="WY">14 Hari</option>
					</select>
				</div>
			</div>

			<div class="col-sm-2"></div>

			<div class="col-sm-2">
				<div class="form-group">
					<label class="label font-weight-bold">Nomor Transaksi</label>
					<input class="form-control" name="no_transaksi" placeholder="[Auto]">
				</div>
				<div class="form-group">
					<label class="label font-weight-bold">Nomor PO</label>
					<input type="text" class="form-control" placeholder="Optional">
				</div>
			</div>
			<div class="col-sm-2"></div>
		</div>

		<table class="table table-striped" cellspacing="0" width="100%">
			<thead>
				<th>
					<td width="30%">*Produk</td>
					<td>Harga</td>
					<td width="10%">Qty</td>
					<td width="10%">Diskon</td>
					<td>Jumlah</td>
					<td></td>
				</th>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td>
						<select class="js-example-basic-single form-control" id="produk" name="products_id">

						</select>
					</td>
					<td>
						<input type="text" class="form-control" name="">
					</td>
					<td>
						<input type="text" class="form-control" name="">
					</td>
					<td>
						<input type="text" class="form-control" name="">
					</td>
					<td>
						<input type="text" class="form-control" name="">
					</td>
					<td><a href="#">-</a></td>
				</tr>
			</tbody>
		</table>
		<hr>
		<div class="row">
			<div class="col-8"></div>
			<div class="col-2">
				<p>Subtotal</p>
				<p>Diskon</p>
				<p>PPn</p>
				<h4>Total</h4>
			</div>
			<div class="col-2">
				<p class="text-right">Rp. 50.000.000</p>
				<p class="text-right">Rp. 500.000</p>
				<p class="text-right">Rp. 500.000</p>
				<h4 class="text-right">Rp. 50.000.000</h4>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-10"></div>
			<div class="col-2">
				<div class="text-right">
					<button class=" btn btn-danger">Batal</button>
					<button class="btn btn-primary">Simpan</button>
			    </div>
			</div>
		</div>
	</form>
@endsection

@push('scripts')
  	<script type="text/javascript">
  		$(document).ready(function() {
		    $('.tgl').datepicker({
		          format: 'yyyy-mm-dd',
		          autoclose: true,
		          todayHighlight: true,
		    });

		    //seelct2 ajax untuk input pelanggan
		    $('#pelanggan').select2({
		    	ajax: {
		    		url: {{ route('find.customer') }},
		    		dataType: 'json',
		    		type: 'post',
		    		delay: 250,
		    		data: function(params){
		    			return {
		    				search: params.term
		    			}
		    		},
		    		proccessResults: function(data){
		    			return {
		    				results: data
		    			}
		    		}
		    		cache: true
		    	},
		    	placeholder: 'Cari pelanggan',
		    	allowClear: true
		    });
	    });
  	</script>
@endpush
