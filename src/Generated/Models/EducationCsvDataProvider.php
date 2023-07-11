<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationCsvDataProvider extends EducationSynchronizationDataProvider implements Parsable 
{
    /**
     * Instantiates a new educationCsvDataProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationCsvDataProvider');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationCsvDataProvider
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationCsvDataProvider {
        return new EducationCsvDataProvider();
    }

    /**
     * Gets the customizations property value. Optional customizations to be applied to the synchronization profile.
     * @return EducationSynchronizationCustomizations|null
    */
    public function getCustomizations(): ?EducationSynchronizationCustomizations {
        $val = $this->getBackingStore()->get('customizations');
        if (is_null($val) || $val instanceof EducationSynchronizationCustomizations) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customizations'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customizations' => fn(ParseNode $n) => $o->setCustomizations($n->getObjectValue([EducationSynchronizationCustomizations::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('customizations', $this->getCustomizations());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the customizations property value. Optional customizations to be applied to the synchronization profile.
     * @param EducationSynchronizationCustomizations|null $value Value to set for the customizations property.
    */
    public function setCustomizations(?EducationSynchronizationCustomizations $value): void {
        $this->getBackingStore()->set('customizations', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
