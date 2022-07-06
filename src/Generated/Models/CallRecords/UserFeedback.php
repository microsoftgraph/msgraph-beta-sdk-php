<?php

namespace Microsoft\Graph\Beta\Generated\Models\CallRecords;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserFeedback implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var UserFeedbackRating|null $rating The rating provided by the user of this endpoint about the quality of this Session. Possible values are: notRated, bad, poor, fair, good, excellent, unknownFutureValue.
    */
    private ?UserFeedbackRating $rating = null;
    
    /**
     * @var string|null $text The feedback text provided by the user of this endpoint for the session.
    */
    private ?string $text = null;
    
    /**
     * @var FeedbackTokenSet|null $tokens The set of feedback tokens provided by the user of this endpoint for the session. This is a set of Boolean properties. The property names should not be relied upon since they may change depending on what tokens are offered to the user.
    */
    private ?FeedbackTokenSet $tokens = null;
    
    /**
     * Instantiates a new userFeedback and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserFeedback
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserFeedback {
        return new UserFeedback();
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
            'rating' => function (ParseNode $n) use ($o) { $o->setRating($n->getEnumValue(UserFeedbackRating::class)); },
            'text' => function (ParseNode $n) use ($o) { $o->setText($n->getStringValue()); },
            'tokens' => function (ParseNode $n) use ($o) { $o->setTokens($n->getObjectValue(array(FeedbackTokenSet::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the rating property value. The rating provided by the user of this endpoint about the quality of this Session. Possible values are: notRated, bad, poor, fair, good, excellent, unknownFutureValue.
     * @return UserFeedbackRating|null
    */
    public function getRating(): ?UserFeedbackRating {
        return $this->rating;
    }

    /**
     * Gets the text property value. The feedback text provided by the user of this endpoint for the session.
     * @return string|null
    */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * Gets the tokens property value. The set of feedback tokens provided by the user of this endpoint for the session. This is a set of Boolean properties. The property names should not be relied upon since they may change depending on what tokens are offered to the user.
     * @return FeedbackTokenSet|null
    */
    public function getTokens(): ?FeedbackTokenSet {
        return $this->tokens;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('rating', $this->rating);
        $writer->writeStringValue('text', $this->text);
        $writer->writeObjectValue('tokens', $this->tokens);
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
     * Sets the rating property value. The rating provided by the user of this endpoint about the quality of this Session. Possible values are: notRated, bad, poor, fair, good, excellent, unknownFutureValue.
     *  @param UserFeedbackRating|null $value Value to set for the rating property.
    */
    public function setRating(?UserFeedbackRating $value ): void {
        $this->rating = $value;
    }

    /**
     * Sets the text property value. The feedback text provided by the user of this endpoint for the session.
     *  @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value ): void {
        $this->text = $value;
    }

    /**
     * Sets the tokens property value. The set of feedback tokens provided by the user of this endpoint for the session. This is a set of Boolean properties. The property names should not be relied upon since they may change depending on what tokens are offered to the user.
     *  @param FeedbackTokenSet|null $value Value to set for the tokens property.
    */
    public function setTokens(?FeedbackTokenSet $value ): void {
        $this->tokens = $value;
    }

}
