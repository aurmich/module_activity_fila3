<?php

declare(strict_types=1);

namespace Modules\Media\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Modules\Media\Enums\AttachmentTypeEnum;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media as SpatieMedia;

/**
 * Modules\Media\Models\Media.
 *
 * @property int                                        $id
 * @property string                                     $model_type
 * @property int                                        $model_id
 * @property string|null                                $uuid
 * @property string                                     $collection_name
 * @property string                                     $name
 * @property string                                     $file_name
 * @property string|null                                $mime_type
 * @property string                                     $disk
 * @property string|null                                $conversions_disk
 * @property int                                        $size
 * @property mixed                                      $manipulations
 * @property mixed                                      $custom_properties
 * @property mixed                                      $generated_conversions
 * @property mixed                                      $responsive_images
 * @property int|null                                   $order_column
 * @property Carbon|null                                $created_at
 * @property Carbon|null                                $updated_at
 * @property string|null                                $created_by
 * @property string|null                                $updated_by
 * @property int                                        $user_id
 * @property string                                     $directory
 * @property string|null                                $path
 * @property int|null                                   $width
 * @property int|null                                   $height
 * @property string|null                                $type
 * @property string|null                                $ext
 * @property string|null                                $alt
 * @property string|null                                $title
 * @property string|null                                $description
 * @property string|null                                $caption
 * @property string|null                                $exif
 * @property string|null                                $curations
 * @property AttachmentTypeEnum                         $attachment_type
 * @property Model|\Eloquent                            $model
 * @property \Modules\Media\Models\TemporaryUpload|null $temporaryUpload
 * @method static MediaCollection<int, static> all($columns = ['*'])
 * @method static MediaCollection<int, static> get($columns = ['*'])
 * @method static Builder|Media                newModelQuery()
 * @method static Builder|Media                newQuery()
 * @method static Builder|Media                ordered()
 * @method static Builder|Media                query()
 * @method static Builder|Media                whereAlt($value)
 * @method static Builder|Media                whereCaption($value)
 * @method static Builder|Media                whereCollectionName($value)
 * @method static Builder|Media                whereConversionsDisk($value)
 * @method static Builder|Media                whereCreatedAt($value)
 * @method static Builder|Media                whereCreatedBy($value)
 * @method static Builder|Media                whereCurations($value)
 * @method static Builder|Media                whereCustomProperties($value)
 * @method static Builder|Media                whereDescription($value)
 * @method static Builder|Media                whereDirectory($value)
 * @method static Builder|Media                whereDisk($value)
 * @method static Builder|Media                whereExif($value)
 * @method static Builder|Media                whereExt($value)
 * @method static Builder|Media                whereFileName($value)
 * @method static Builder|Media                whereGeneratedConversions($value)
 * @method static Builder|Media                whereHeight($value)
 * @method static Builder|Media                whereId($value)
 * @method static Builder|Media                whereManipulations($value)
 * @method static Builder|Media                whereMimeType($value)
 * @method static Builder|Media                whereModelId($value)
 * @method static Builder|Media                whereModelType($value)
 * @method static Builder|Media                whereName($value)
 * @method static Builder|Media                whereOrderColumn($value)
 * @method static Builder|Media                wherePath($value)
 * @method static Builder|Media                whereResponsiveImages($value)
 * @method static Builder|Media                whereSize($value)
 * @method static Builder|Media                whereTitle($value)
 * @method static Builder|Media                whereType($value)
 * @method static Builder|Media                whereUpdatedAt($value)
 * @method static Builder|Media                whereUpdatedBy($value)
 * @method static Builder|Media                whereUserId($value)
 * @method static Builder|Media                whereUuid($value)
 * @method static Builder|Media                whereWidth($value)
 * @method static MediaCollection<int, static> all($columns = ['*'])
 * @method static MediaCollection<int, static> get($columns = ['*'])
 * @mixin Eloquent
 */
class Media extends SpatieMedia
{
    /**
     * @var array<string, string>
     */
    protected $casts = [
        'attachment_type' => AttachmentTypeEnum::class,
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     *
     * @psalm-return Collection<int, Media>
     */
    public static function findWithTemporaryUploadInCurrentSession(array $uuids): Collection
    {
        // MediaLibraryPro::ensureInstalled();

        return static::query()
            ->whereIn('uuid', $uuids)
            ->whereHasMorph(
                'model',
                [TemporaryUpload::class],
                fn (Builder $builder) => $builder->where('session_id', session()->getId())
            )
            ->get();
    }

    /**
     * @psalm-return BelongsTo<TemporaryUpload,Media>
     */
    public function temporaryUpload(): BelongsTo
    {
        // MediaLibraryPro::ensureInstalled();

        return $this->belongsTo(TemporaryUpload::class);
    }
}
