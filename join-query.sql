SELECT inv_material.material_description,inv_materialbalance.mb_materialid,inv_materialbalance.mbin_qty,inv_item_unit.unit_name FROM inv_materialbalance INNER JOIN inv_material ON inv_material.material_id_code=inv_materialbalance.mb_materialid INNER JOIN inv_item_unit ON inv_item_unit.id=inv_material.qty_unit




SELECT * FROM inv_materialbalance INNER JOIN inv_material ON inv_material.material_id_code=inv_materialbalance.mb_materialid INNER JOIN inv_item_unit ON inv_item_unit.id=inv_material.qty_unit