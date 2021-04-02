@extends('layouts.admin')
@section('content')
	<form>
		@csrf
	    <h4 class="c-grey-900 mB-30">{{ $title }}</h4>
		<div class="row" style="background-color: #E5FFFF;">
			<div class="col-4">
				<div class="form-group mt-2">
					<label class="label font-weight-bold">*Pelanggan</label>
					<select class="form-control" id="pelanggan" name="customers_id">
					  
					</select>
				</div>
			</div>
			<div class="col-2">
				<div class="form-group mt-2">
					<label class="label font-weight-bold">E-mail</label>
					<input id="email" type="email" class="form-control" name="" readonly style="background-color: #fff;">
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
					<textarea id="alamat" class="form-control" readonly style="background-color: #fff;"></textarea>
				</div>
			</div>

			<div class="col-sm-2">
				<div class="form-group">	
					<label><strong>Tanggal</strong></label>
	                <div class="input-group mb-3">
	                    <div class="input-group-prepend">
	                        <label class="input-group-text" id="basic-addon2" for="tanggal"><i class="fas fa-calendar-alt"></i></label>
	                    </div>
	                    <input id="tanggal" type="text" name="tanggal" class="form-control tgl" value="{{ date('Y-m-d') }}">
	                </div>
                </div>

				<div class="form-group">	
					<label><strong>Tanggal jatuh tempo</strong></label>
	                <div class="input-group mb-3">
	                    <div class="input-group-prepend">
	                        <label class="input-group-text" id="basic-addon2" for="overdue"><i class="fas fa-calendar-alt"></i></label>
	                    </div>
	                    <input id="overdue" type="text" name="overdue" class="form-control tgl" value="{{ date('Y-m-d') }}">
	                </div>
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

		@livewire('products')
		
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
  			let row = 1;

		    $('.tgl').datepicker({
		          format: 'yyyy-mm-dd',
		          autoclose: true,
		          todayHighlight: true,
		    });

		    //memanggil methode select
		    select_pelanggan();
		    select_produk();
	    });

  		//fungsi select2 untuk input pelanggan
	    function select_pelanggan() {
	    	$('#pelanggan').select2({
	    		placeholder: 'Cari pelanggan',
		    	allowClear: true,
		    	theme: "bootstrap4",
		    	ajax: {
		    		url: '{{ route("find.customer") }}',
		    		dataType: 'json',
		    		type: 'post',
		    		delay: 100,
		    		data: function(params){
		    			return {
		    				search: params.term
		    			}
		    		},
		    		processResults: function(data){
		    			return {
		    				results: data
		    			}
		    		},
		    		cache: true
		    	}

		    }).on('select2:select', function(e) {
		    	const val = e.params.data;
		    	$('#alamat').text(val.address);
		    	$('#email').val(val.email);

		    }).on('select2:unselecting', function() {
			    $(this).data('unselecting', true);
			    $('#alamat').text('');
		    	$('#email').val('');

			}).on('select2:opening', function(e) {
			    if ($(this).data('unselecting')) {
			        $(this).removeData('unselecting');
			        e.preventDefault();
			    }
			});
	    }

	    //fungsi select2 untuk input produk
	    function select_produk() {
	    	let token = $('meta[name="csrf-token"]').attr('content');
	    	$('#produk').select2({
	    		placeholder: 'Cari produk',
		    	allowClear: true,
		    	theme: "bootstrap4",
		    	minimumInputLength: 3,
		    	ajax: {
		    		url: '{{ route("find.product") }}',
		    		dataType: 'json',
		    		type: 'post',
		    		delay: 100,
		    		data: function(params){
		    			return {
		    				_token: token,
		    				search: params.term
		    			}
		    		},
		    		processResults: function(data){
		    			return {
		    				results: data
		    			}
		    		},
		    		cache: true
		    	}

		    }).on('select2:select', function(e) {
		    	const val = e.params.data;
		    	$('#harga').val(val.price);

		    }).on('select2:unselecting', function() {
			    $(this).data('unselecting', true);
		    	$('#harga').val('');

			}).on('select2:opening', function(e) {
			    if ($(this).data('unselecting')) {
			        $(this).removeData('unselecting');
			        e.preventDefault();
			    }
			});
	    }
  	</script>
@endpush
