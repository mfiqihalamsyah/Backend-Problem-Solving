SELECT 
    a.id, 
    a.name, 
    b.name AS parent_name
FROM 
    name a
LEFT JOIN 
    name b
ON 
    a.parent_id = b.id;
