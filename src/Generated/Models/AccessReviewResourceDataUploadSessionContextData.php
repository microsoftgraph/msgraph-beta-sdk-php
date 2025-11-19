<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewResourceDataUploadSessionContextData extends CustomExtensionData implements Parsable 
{
    /**
     * Instantiates a new AccessReviewResourceDataUploadSessionContextData and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewResourceDataUploadSessionContextData');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewResourceDataUploadSessionContextData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewResourceDataUploadSessionContextData {
        return new AccessReviewResourceDataUploadSessionContextData();
    }

    /**
     * Gets the accessReviewId property value. The access review definition id.
     * @return string|null
    */
    public function getAccessReviewId(): ?string {
        $val = $this->getBackingStore()->get('accessReviewId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessReviewId'");
    }

    /**
     * Gets the accessReviewInstanceId property value. The access review instance id.
     * @return string|null
    */
    public function getAccessReviewInstanceId(): ?string {
        $val = $this->getBackingStore()->get('accessReviewInstanceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessReviewInstanceId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessReviewId' => fn(ParseNode $n) => $o->setAccessReviewId($n->getStringValue()),
            'accessReviewInstanceId' => fn(ParseNode $n) => $o->setAccessReviewInstanceId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accessReviewId', $this->getAccessReviewId());
        $writer->writeStringValue('accessReviewInstanceId', $this->getAccessReviewInstanceId());
    }

    /**
     * Sets the accessReviewId property value. The access review definition id.
     * @param string|null $value Value to set for the accessReviewId property.
    */
    public function setAccessReviewId(?string $value): void {
        $this->getBackingStore()->set('accessReviewId', $value);
    }

    /**
     * Sets the accessReviewInstanceId property value. The access review instance id.
     * @param string|null $value Value to set for the accessReviewInstanceId property.
    */
    public function setAccessReviewInstanceId(?string $value): void {
        $this->getBackingStore()->set('accessReviewInstanceId', $value);
    }

}
