<?php

// get store book
function storeBook($conn, $formData)
{
  extract($formData);
  $dateTime = date("Y-m-d H:i:s");

  ## form data validation start
  if (empty($title)) {
    $result = ["error" => "Please fill title input field."];
    return $result;
  } else if (empty($author)) {
    $result = ["error" => "Please fill author input field."];
    return $result;
  } else if (empty($publication_name)) {
    $result = ["error" => "Please fill publication name input field"];
    return $result;
  } else if (empty($publication_year)) {
    $result = ["error" => "Please fill publication year input field."];
    return $result;
  } else if (empty($category_id)) {
    $result = ["error" => "Please fill category input field."];
    return $result;
  } else if (empty($isbn)) {
    $result = ["error" => "Please fill isbn input field."];
    return $result;
  } else if (isbnUniqueNumber($conn, $isbn, $id)) {
    $result = ["error" => "isbn number already register."];
    return $result;
  }
  ## form data validation end

  $sql = "INSERT INTO `books` (`title`, `author`, `publication_name`, `publication_year`, `isbn`, `category_id`, `created_at`) VAlUES ('$title', '$author', '$publication_name', '$publication_year', '$isbn', '$category_id', '$dateTime')";

  $result["success"] = $conn->query($sql);
  return $result;
}

// get categories from database
function getCategories($conn)
{
  $sql = "SELECT `id`, `name` FROM `categories`";
  return $conn->query($sql);
}

// isbn unique number
function isbnUniqueNumber($conn, $isbn, $id = NULL)
{
  $sql = "SELECT id FROM books WHERE isbn = '$isbn'";
  if ($id) {
    $sql .= " and id != '$id'";
  }
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    return true;
  } else {
    return false;
  }
}

// get all books from database
function getBooks($conn)
{
  $sql = "SELECT b.*, c.name AS category_name FROM books b
          LEFT JOIN categories c ON c.id = b.category_id 
          ORDER BY id DESC";

  return $conn->query($sql);
}

// get edit data
function getShowEditData($conn, $id)
{
  $sql = "SELECT * FROM books WHERE id = '$id'";

  return $conn->query($sql);
}

// update book
function updateBook($conn, $formData)
{
  extract($formData);
  $dateTime = date("Y-m-d H:i:s");

  ## form data validation start
  if (empty($title)) {
    $result = ["error" => "Please fill title input field."];
    return $result;
  } else if (empty($author)) {
    $result = ["error" => "Please fill author input field."];
    return $result;
  } else if (empty($publication_name)) {
    $result = ["error" => "Please fill publication name input field"];
    return $result;
  } else if (empty($publication_year)) {
    $result = ["error" => "Please fill publication year input field."];
    return $result;
  } else if (empty($category_id)) {
    $result = ["error" => "Please fill category input field."];
    return $result;
  } else if (empty($isbn)) {
    $result = ["error" => "Please fill isbn input field."];
    return $result;
  } else if (isbnUniqueNumber($conn, $isbn, $id)) {
    $result = ["error" => "isbn number already register."];
    return $result;
  }
  ## form data validation end

  $sql = "UPDATE books SET 
          title = '$title',
          author = '$author',
          isbn = '$isbn',
          publication_name = '$publication_name',
          publication_year = '$publication_year',
          category_id = '$category_id',
          updated_at = '$datetime'
          WHERE id = '$id'";
  $result["success"] = $conn->query($sql);
  return $result;
}

// Delete book from database
function removeBook($conn, $id)
{
  $sql = "DELETE FROM books WHERE id = $id";
  return $conn->query($sql);
}

// status update from database
function updateStatus($conn, $id, $status)
{
  $sql = "UPDATE  books SET status = '$status' WHERE id = $id";
  return $conn->query($sql);
}
