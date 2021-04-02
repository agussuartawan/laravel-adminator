<div>
    <table class="table table-striped" id="tableProduct" cellspacing="0" width="100%">
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

			<?php $index = 0; ?>
			@foreach($row as $r)
			<?php $index++; ?>
			<tr>
				<td></td>
				<td>
					<select class="form-control" id="produk-{{ $index }}" name="products_id"
					wire:model="produk-.{{ $index}}">

					</select>
				</td>
				<td>
					<input type="text" class="form-control" id="harga-{{ $index }}" name="harga">
				</td>
				<td>
					<input type="number" class="form-control" id="qty-{{ $index }}" name="qty" value=""
					wire:model="qty-.{{ $index}}">
				</td>
				<td>
					<input type="number" class="form-control" id="discount-{{ $index }}" name="discount"
					wire:model="discount-.{{ $index}}">
				</td>
				<td>
					<input type="text" class="form-control" id="subtotal-{{ $index }}" name="subtotal"
					wire:model="subtotal-.{{ $index}}">
				</td>
				<td><a class="text-dark" href="#" wire:click.prevent="removeProduct({{ $index }})"><i class="fas fa-trash"></i></a></td>
			</tr>
			@endforeach
		</tbody>
		<tfoot>
			<tr>
				<td></td>
				<td>
					<a href="#" id="btnTambah" class="btn btn-sm btn-primary" wire:click.prevent="addProduct">
						<i class="fas fa-plus"></i>Tambah Form
					</a>
				</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tfoot>
	</table>
</div>
