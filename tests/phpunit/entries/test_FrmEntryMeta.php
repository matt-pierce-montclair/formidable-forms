<?php

/**
 * @group entries
 */
class test_FrmEntryMeta extends FrmUnitTest {

	/**
	 * @covers FrmEntryMeta::update_entry_metas
	 */
	public function test_update_entry_metas() {
		$form       = $this->factory->form->create_and_get();
		$field_id   = $this->factory->field->create(
			array(
				'form_id' => $form->id,
			)
		);
		$entry_data = $this->factory->field->generate_entry_array( $form );

		$entry_data['item_meta'][ $field_id ] = 'Original value';

		$entry_id = $this->factory->entry->create( $entry_data );

		// Test field ID.
		$values = array(
			$field_id => 'Updated value by field ID',
		);
		FrmEntryMeta::update_entry_metas( $entry_id, $values );

		$meta = FrmEntryMeta::get_entry_meta_by_field( $entry_id, $field_id );

		$this->assertEquals( 'Updated value by field ID', $meta );

		// Test field key.
		$field_key = FrmField::get_key_by_id( $field_id );
		$values    = array(
			$field_key => 'Updated value by field key',
		);
		FrmEntryMeta::update_entry_metas( $entry_id, $values );

		$meta = FrmEntryMeta::get_entry_meta_by_field( $entry_id, $field_id );

		$this->assertEquals( 'Updated value by field key', $meta );

		// Test with an empty value. It should be null because the row should be deleted from the db.
		$values = array(
			$field_key => '',
		);
		FrmEntryMeta::update_entry_metas( $entry_id, $values );

		$meta = FrmEntryMeta::get_entry_meta_by_field( $entry_id, $field_id );

		$this->assertNull( $meta );
	}

	/**
	 * @covers FrmEntryMeta::should_join_fields_table
	 */
	public function test_should_join_fields_table() {
		$where = 'fi.form_id=123';
		$this->assertFalse( $this->run_private_method( array( 'FrmEntryMeta', 'should_join_fields_table' ), array( &$where ) ) );
		$this->assertEquals( 'e.form_id=123', $where );

		$where = 'fi.id=123 AND fi.form_id=456';
		$this->assertTrue( $this->run_private_method( array( 'FrmEntryMeta', 'should_join_fields_table' ), array( &$where ) ) );
		$this->assertEquals( 'fi.id=123 AND fi.form_id=456', $where );

		$where = array(
			'fi.id'      => 123,
			'fi.form_id' => 456,
		);
		$this->assertTrue( $this->run_private_method( array( 'FrmEntryMeta', 'should_join_fields_table' ), array( &$where ) ) );
		$this->assertEquals(
			array(
				'fi.id'      => 123,
				'fi.form_id' => 456,
			),
			$where
		);

		$where = array(
			'fi.form_id' => 456,
		);
		$this->assertFalse( $this->run_private_method( array( 'FrmEntryMeta', 'should_join_fields_table' ), array( &$where ) ) );
		$this->assertEquals( array( 'e.form_id' => 456 ), $where );
	}
}
