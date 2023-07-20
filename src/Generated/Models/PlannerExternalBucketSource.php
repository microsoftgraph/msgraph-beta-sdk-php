<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerExternalBucketSource extends PlannerBucketCreation implements Parsable 
{
    /**
     * Instantiates a new plannerExternalBucketSource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.plannerExternalBucketSource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerExternalBucketSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerExternalBucketSource {
        return new PlannerExternalBucketSource();
    }

    /**
     * Gets the contextScenarioId property value. Nullable. An identifier for the scenario associated with this external source. This should be in reverse DNS format. For example, Contoso company owned application for customer support would have a value like 'com.constoso.customerSupport'.
     * @return string|null
    */
    public function getContextScenarioId(): ?string {
        $val = $this->getBackingStore()->get('contextScenarioId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contextScenarioId'");
    }

    /**
     * Gets the externalContextId property value. Nullable. The id of the external entity's containing entity or context.
     * @return string|null
    */
    public function getExternalContextId(): ?string {
        $val = $this->getBackingStore()->get('externalContextId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalContextId'");
    }

    /**
     * Gets the externalObjectId property value. Nullable. The id of the entity that an external service associates with a bucket.
     * @return string|null
    */
    public function getExternalObjectId(): ?string {
        $val = $this->getBackingStore()->get('externalObjectId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalObjectId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contextScenarioId' => fn(ParseNode $n) => $o->setContextScenarioId($n->getStringValue()),
            'externalContextId' => fn(ParseNode $n) => $o->setExternalContextId($n->getStringValue()),
            'externalObjectId' => fn(ParseNode $n) => $o->setExternalObjectId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('contextScenarioId', $this->getContextScenarioId());
        $writer->writeStringValue('externalContextId', $this->getExternalContextId());
        $writer->writeStringValue('externalObjectId', $this->getExternalObjectId());
    }

    /**
     * Sets the contextScenarioId property value. Nullable. An identifier for the scenario associated with this external source. This should be in reverse DNS format. For example, Contoso company owned application for customer support would have a value like 'com.constoso.customerSupport'.
     * @param string|null $value Value to set for the contextScenarioId property.
    */
    public function setContextScenarioId(?string $value): void {
        $this->getBackingStore()->set('contextScenarioId', $value);
    }

    /**
     * Sets the externalContextId property value. Nullable. The id of the external entity's containing entity or context.
     * @param string|null $value Value to set for the externalContextId property.
    */
    public function setExternalContextId(?string $value): void {
        $this->getBackingStore()->set('externalContextId', $value);
    }

    /**
     * Sets the externalObjectId property value. Nullable. The id of the entity that an external service associates with a bucket.
     * @param string|null $value Value to set for the externalObjectId property.
    */
    public function setExternalObjectId(?string $value): void {
        $this->getBackingStore()->set('externalObjectId', $value);
    }

}
