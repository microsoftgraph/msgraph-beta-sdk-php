<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewDataUploadRequestCalloutData extends CustomExtensionData implements Parsable 
{
    /**
     * Instantiates a new AccessReviewDataUploadRequestCalloutData and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewDataUploadRequestCalloutData');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewDataUploadRequestCalloutData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewDataUploadRequestCalloutData {
        return new AccessReviewDataUploadRequestCalloutData();
    }

    /**
     * Gets the accessReviewInstance property value. The accessReviewInstance property
     * @return AccessReviewInstance|null
    */
    public function getAccessReviewInstance(): ?AccessReviewInstance {
        $val = $this->getBackingStore()->get('accessReviewInstance');
        if (is_null($val) || $val instanceof AccessReviewInstance) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessReviewInstance'");
    }

    /**
     * Gets the callbackDataType property value. The callbackDataType property
     * @return string|null
    */
    public function getCallbackDataType(): ?string {
        $val = $this->getBackingStore()->get('callbackDataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callbackDataType'");
    }

    /**
     * Gets the catalog property value. The catalog property
     * @return AccessPackageCatalog|null
    */
    public function getCatalog(): ?AccessPackageCatalog {
        $val = $this->getBackingStore()->get('catalog');
        if (is_null($val) || $val instanceof AccessPackageCatalog) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'catalog'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessReviewInstance' => fn(ParseNode $n) => $o->setAccessReviewInstance($n->getObjectValue([AccessReviewInstance::class, 'createFromDiscriminatorValue'])),
            'callbackDataType' => fn(ParseNode $n) => $o->setCallbackDataType($n->getStringValue()),
            'catalog' => fn(ParseNode $n) => $o->setCatalog($n->getObjectValue([AccessPackageCatalog::class, 'createFromDiscriminatorValue'])),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getObjectValue([AccessPackageResource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the resource property value. The resource property
     * @return AccessPackageResource|null
    */
    public function getResource(): ?AccessPackageResource {
        $val = $this->getBackingStore()->get('resource');
        if (is_null($val) || $val instanceof AccessPackageResource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resource'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessReviewInstance', $this->getAccessReviewInstance());
        $writer->writeStringValue('callbackDataType', $this->getCallbackDataType());
        $writer->writeObjectValue('catalog', $this->getCatalog());
        $writer->writeObjectValue('resource', $this->getResource());
    }

    /**
     * Sets the accessReviewInstance property value. The accessReviewInstance property
     * @param AccessReviewInstance|null $value Value to set for the accessReviewInstance property.
    */
    public function setAccessReviewInstance(?AccessReviewInstance $value): void {
        $this->getBackingStore()->set('accessReviewInstance', $value);
    }

    /**
     * Sets the callbackDataType property value. The callbackDataType property
     * @param string|null $value Value to set for the callbackDataType property.
    */
    public function setCallbackDataType(?string $value): void {
        $this->getBackingStore()->set('callbackDataType', $value);
    }

    /**
     * Sets the catalog property value. The catalog property
     * @param AccessPackageCatalog|null $value Value to set for the catalog property.
    */
    public function setCatalog(?AccessPackageCatalog $value): void {
        $this->getBackingStore()->set('catalog', $value);
    }

    /**
     * Sets the resource property value. The resource property
     * @param AccessPackageResource|null $value Value to set for the resource property.
    */
    public function setResource(?AccessPackageResource $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

}
