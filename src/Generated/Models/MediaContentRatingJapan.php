<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MediaContentRatingJapan implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var RatingJapanMoviesType|null $movieRating Movies rating selected for Japan. Possible values are: allAllowed, allBlocked, general, parentalGuidance, agesAbove15, agesAbove18.
    */
    private ?RatingJapanMoviesType $movieRating = null;
    
    /**
     * @var RatingJapanTelevisionType|null $tvRating TV rating selected for Japan. Possible values are: allAllowed, allBlocked, explicitAllowed.
    */
    private ?RatingJapanTelevisionType $tvRating = null;
    
    /**
     * Instantiates a new mediaContentRatingJapan and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MediaContentRatingJapan
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MediaContentRatingJapan {
        return new MediaContentRatingJapan();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'movieRating' => function (ParseNode $n) use ($o) { $o->setMovieRating($n->getEnumValue(RatingJapanMoviesType::class)); },
            'tvRating' => function (ParseNode $n) use ($o) { $o->setTvRating($n->getEnumValue(RatingJapanTelevisionType::class)); },
        ];
    }

    /**
     * Gets the movieRating property value. Movies rating selected for Japan. Possible values are: allAllowed, allBlocked, general, parentalGuidance, agesAbove15, agesAbove18.
     * @return RatingJapanMoviesType|null
    */
    public function getMovieRating(): ?RatingJapanMoviesType {
        return $this->movieRating;
    }

    /**
     * Gets the tvRating property value. TV rating selected for Japan. Possible values are: allAllowed, allBlocked, explicitAllowed.
     * @return RatingJapanTelevisionType|null
    */
    public function getTvRating(): ?RatingJapanTelevisionType {
        return $this->tvRating;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('movieRating', $this->movieRating);
        $writer->writeEnumValue('tvRating', $this->tvRating);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the movieRating property value. Movies rating selected for Japan. Possible values are: allAllowed, allBlocked, general, parentalGuidance, agesAbove15, agesAbove18.
     *  @param RatingJapanMoviesType|null $value Value to set for the movieRating property.
    */
    public function setMovieRating(?RatingJapanMoviesType $value ): void {
        $this->movieRating = $value;
    }

    /**
     * Sets the tvRating property value. TV rating selected for Japan. Possible values are: allAllowed, allBlocked, explicitAllowed.
     *  @param RatingJapanTelevisionType|null $value Value to set for the tvRating property.
    */
    public function setTvRating(?RatingJapanTelevisionType $value ): void {
        $this->tvRating = $value;
    }

}
