<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EducationIdentityMatchingConfiguration extends EducationIdentitySynchronizationConfiguration implements Parsable 
{
    /**
     * Instantiates a new educationIdentityMatchingConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationIdentityMatchingConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationIdentityMatchingConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationIdentityMatchingConfiguration {
        return new EducationIdentityMatchingConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'matchingOptions' => fn(ParseNode $n) => $o->setMatchingOptions($n->getCollectionOfObjectValues([EducationIdentityMatchingOptions::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the matchingOptions property value. Mapping between the user account and the options to use to uniquely identify the user to update.
     * @return array<EducationIdentityMatchingOptions>|null
    */
    public function getMatchingOptions(): ?array {
        $val = $this->getBackingStore()->get('matchingOptions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EducationIdentityMatchingOptions::class);
            /** @var array<EducationIdentityMatchingOptions>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'matchingOptions'");
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
        $writer->writeCollectionOfObjectValues('matchingOptions', $this->getMatchingOptions());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the matchingOptions property value. Mapping between the user account and the options to use to uniquely identify the user to update.
     * @param array<EducationIdentityMatchingOptions>|null $value Value to set for the matchingOptions property.
    */
    public function setMatchingOptions(?array $value): void {
        $this->getBackingStore()->set('matchingOptions', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
