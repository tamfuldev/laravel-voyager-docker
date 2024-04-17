<?php
namespace App\Repositories;

use App\Enums\UserRoles;
use stdClass;
use TCG\Voyager\Models\Post;

class PostRepository extends BaseRepository implements PostRepositoryInterface {

    public function __construct(Post $post) {
        parent::__construct($post);
    }

    /**
     * Overriding BaseRepository method
     */
    public function create(array $data) : stdClass {
        if (!UserRoles::ADMIN) {
            return;
        }
        return (object) $this->model->create([
            // code
        ])->toArray();
    }
}
