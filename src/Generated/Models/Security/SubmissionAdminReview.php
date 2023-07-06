<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SubmissionAdminReview implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new submissionAdminReview and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the reviewBy property value. Specifies who reviewed the email. The identification is an email ID or other identity strings.
     * @return string|null
    */
    public function getReviewBy(): ?string {
        $val = $this->getBackingStore()->get('reviewBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewBy'");
    }

    /**
     * Gets the reviewDateTime property value. Specifies the date time when the review occurred.
     * @return DateTime|null
    */
    public function getReviewDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('reviewDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewDateTime'");
    }

    /**
     * Gets the reviewResult property value. Specifies what the review result was. The possible values are: notJunk, spam, phishing, malware, allowedByPolicy, blockedByPolicy, spoof, unknown, noResultAvailable, and unknownFutureValue.
     * @return SubmissionResultCategory|null
    */
    public function getReviewResult(): ?SubmissionResultCategory {
        $val = $this->getBackingStore()->get('reviewResult');
        if (is_null($val) || $val instanceof SubmissionResultCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewResult'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('reviewBy', $this->getReviewBy());
        $writer->writeDateTimeValue('reviewDateTime', $this->getReviewDateTime());
        $writer->writeEnumValue('reviewResult', $this->getReviewResult());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the reviewBy property value. Specifies who reviewed the email. The identification is an email ID or other identity strings.
     * @param string|null $value Value to set for the reviewBy property.
    */
    public function setReviewBy(?string $value): void {
        $this->getBackingStore()->set('reviewBy', $value);
    }

    /**
     * Sets the reviewDateTime property value. Specifies the date time when the review occurred.
     * @param DateTime|null $value Value to set for the reviewDateTime property.
    */
    public function setReviewDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('reviewDateTime', $value);
    }

    /**
     * Sets the reviewResult property value. Specifies what the review result was. The possible values are: notJunk, spam, phishing, malware, allowedByPolicy, blockedByPolicy, spoof, unknown, noResultAvailable, and unknownFutureValue.
     * @param SubmissionResultCategory|null $value Value to set for the reviewResult property.
    */
    public function setReviewResult(?SubmissionResultCategory $value): void {
        $this->getBackingStore()->set('reviewResult', $value);
    }

}
