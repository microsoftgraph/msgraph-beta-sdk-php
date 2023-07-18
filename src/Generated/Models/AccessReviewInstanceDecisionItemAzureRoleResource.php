<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewInstanceDecisionItemAzureRoleResource extends AccessReviewInstanceDecisionItemResource implements Parsable 
{
    /**
     * Instantiates a new accessReviewInstanceDecisionItemAzureRoleResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewInstanceDecisionItemAzureRoleResource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewInstanceDecisionItemAzureRoleResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewInstanceDecisionItemAzureRoleResource {
        return new AccessReviewInstanceDecisionItemAzureRoleResource();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'scope' => fn(ParseNode $n) => $o->setScope($n->getObjectValue([AccessReviewInstanceDecisionItemResource::class, 'createFromDiscriminatorValue'])),
        ]);
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
     * Gets the scope property value. Details of the scope this role is associated with.
     * @return AccessReviewInstanceDecisionItemResource|null
    */
    public function getScope(): ?AccessReviewInstanceDecisionItemResource {
        $val = $this->getBackingStore()->get('scope');
        if (is_null($val) || $val instanceof AccessReviewInstanceDecisionItemResource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scope'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('scope', $this->getScope());
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the scope property value. Details of the scope this role is associated with.
     * @param AccessReviewInstanceDecisionItemResource|null $value Value to set for the scope property.
    */
    public function setScope(?AccessReviewInstanceDecisionItemResource $value): void {
        $this->getBackingStore()->set('scope', $value);
    }

}
