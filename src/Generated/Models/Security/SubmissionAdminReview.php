<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SubmissionAdminReview implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $reviewBy Specifies who reviewed the email. The identification is an email ID or other identity strings.
    */
    private ?string $reviewBy = null;
    
    /**
     * @var DateTime|null $reviewDateTime Specifies the date time when the review occurred.
    */
    private ?DateTime $reviewDateTime = null;
    
    /**
     * @var SubmissionResultCategory|null $reviewResult Specifies what the review result was. The possible values are: notJunk, spam, phishing, malware, allowedByPolicy, blockedByPolicy, spoof, unknown, noResultAvailable, and unknownFutureValue.
    */
    private ?SubmissionResultCategory $reviewResult = null;
    
    /**
     * Instantiates a new submissionAdminReview and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.security.submissionAdminReview');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubmissionAdminReview
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubmissionAdminReview {
        return new SubmissionAdminReview();
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'reviewBy' => fn(ParseNode $n) => $o->setReviewBy($n->getStringValue()),
            'reviewDateTime' => fn(ParseNode $n) => $o->setReviewDateTime($n->getDateTimeValue()),
            'reviewResult' => fn(ParseNode $n) => $o->setReviewResult($n->getEnumValue(SubmissionResultCategory::class)),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the reviewBy property value. Specifies who reviewed the email. The identification is an email ID or other identity strings.
     * @return string|null
    */
    public function getReviewBy(): ?string {
        return $this->reviewBy;
    }

    /**
     * Gets the reviewDateTime property value. Specifies the date time when the review occurred.
     * @return DateTime|null
    */
    public function getReviewDateTime(): ?DateTime {
        return $this->reviewDateTime;
    }

    /**
     * Gets the reviewResult property value. Specifies what the review result was. The possible values are: notJunk, spam, phishing, malware, allowedByPolicy, blockedByPolicy, spoof, unknown, noResultAvailable, and unknownFutureValue.
     * @return SubmissionResultCategory|null
    */
    public function getReviewResult(): ?SubmissionResultCategory {
        return $this->reviewResult;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('reviewBy', $this->reviewBy);
        $writer->writeDateTimeValue('reviewDateTime', $this->reviewDateTime);
        $writer->writeEnumValue('reviewResult', $this->reviewResult);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the reviewBy property value. Specifies who reviewed the email. The identification is an email ID or other identity strings.
     *  @param string|null $value Value to set for the reviewBy property.
    */
    public function setReviewBy(?string $value ): void {
        $this->reviewBy = $value;
    }

    /**
     * Sets the reviewDateTime property value. Specifies the date time when the review occurred.
     *  @param DateTime|null $value Value to set for the reviewDateTime property.
    */
    public function setReviewDateTime(?DateTime $value ): void {
        $this->reviewDateTime = $value;
    }

    /**
     * Sets the reviewResult property value. Specifies what the review result was. The possible values are: notJunk, spam, phishing, malware, allowedByPolicy, blockedByPolicy, spoof, unknown, noResultAvailable, and unknownFutureValue.
     *  @param SubmissionResultCategory|null $value Value to set for the reviewResult property.
    */
    public function setReviewResult(?SubmissionResultCategory $value ): void {
        $this->reviewResult = $value;
    }

}
