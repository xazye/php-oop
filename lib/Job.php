<?php
class Job
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    // get all jobs
    public function getAllJobs()
    {
        $this->db->query("SELECT jobs.*, categories.name as cname
        FROM jobs 
        INNER JOIN CATEGORIES 
        ON jobs.category_id = categories.id
        ORDER BY post_date DESC
        ");
        // assign results
        $results = $this->db->resultSet();
        return $results;
    }
    public function getByCategory(string $category)
    {
        $this->db->query("SELECT jobs.*, categories.name as cname
        FROM jobs 
        INNER JOIN CATEGORIES 
        ON jobs.category_id = categories.id
        WHERE jobs.category_id = $category
        ORDER BY post_date DESC
        ");
        // assing results
        $results = $this->db->resultSet();
        return $results;
    }
    public function getCategories()
    {
        $this->db->query("SELECT * from categories
        ");
        // assing results
        $results = $this->db->resultSet();
        return $results;
    }
    public function getCategory($category_id)
    {
        $this->db->query("SELECT * from categories WHERE id=:category_id");
        $this->db->bind(":category_id", $category_id);
        $row = $this->db->single();
        return $row->name;
    }
    public function getJob($job_id)
    {
        $this->db->query("SELECT * from jobs WHERE id=:id");
        $this->db->bind(":id", $job_id);
        $row = $this->db->single();
        return $row;
    }
    public function create($data)
    {
        // insert query
        $this->db->query("INSERT INTO jobs(
	    category_id, company, job_title, description, salary, location, contact_user, contact_email)
	    VALUES (:category_id, :company, :job_title, :description, :salary, :location, :contact_user, :contact_email)");
        // bind data
        $this->db->bind(':category_id', $data["category"]);
        $this->db->bind(':company',  $data["company"]);
        $this->db->bind(':job_title', $data["job_title"]);
        $this->db->bind(':description', $data["description"]);
        $this->db->bind(':salary',  $data["salary"]);
        $this->db->bind(':location', $data["location"]);
        $this->db->bind(':contact_user', $data["contact_user"]);
        $this->db->bind(':contact_email', $data["contact_email"]);
        // execut
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function delete($id)
    {
        // insert query
        $this->db->query("DELETE FROM jobs WHERE id=:id");
        // bind data
        $this->db->bind(":id", $id);

        // execut
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function update($job_id, $data)
    {
        // insert query
        $this->db->query(
            "UPDATE jobs
        SET
	    category_id = :category_id,
        company = :company,
        job_title = :job_title,
        description = :description,
        salary = :salary,
        location = :location,
        contact_user = :contact_user,
        contact_email = :contact_email
        WHERE id=:id"
        );
        // bind data
        $this->db->bind(':category_id', $data["category"]);
        $this->db->bind(':company',  $data["company"]);
        $this->db->bind(':job_title', $data["job_title"]);
        $this->db->bind(':description', $data["description"]);
        $this->db->bind(':salary',  $data["salary"]);
        $this->db->bind(':location', $data["location"]);
        $this->db->bind(':contact_user', $data["contact_user"]);
        $this->db->bind(':contact_email', $data["contact_email"]);
        $this->db->bind(':id', $job_id);

        // execut
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
