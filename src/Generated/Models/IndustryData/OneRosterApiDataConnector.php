<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OneRosterApiDataConnector extends ApiDataConnector implements Parsable 
{
    /**
     * Instantiates a new OneRosterApiDataConnector and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.industryData.oneRosterApiDataConnector');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OneRosterApiDataConnector
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OneRosterApiDataConnector {
        return new OneRosterApiDataConnector();
    }

    /**
     * Gets the apiVersion property value. The API version of the OneRoster source. Example: 1.1, 1.2
     * @return string|null
    */
    public function getApiVersion(): ?string {
        $val = $this->getBackingStore()->get('apiVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'apiVersion'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'apiVersion' => fn(ParseNode $n) => $o->setApiVersion($n->getStringValue()),
            'isContactsEnabled' => fn(ParseNode $n) => $o->setIsContactsEnabled($n->getBooleanValue()),
            'isDemographicsEnabled' => fn(ParseNode $n) => $o->setIsDemographicsEnabled($n->getBooleanValue()),
            'isFlagsEnabled' => fn(ParseNode $n) => $o->setIsFlagsEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isContactsEnabled property value. Indicates whether the user specified to import optional contacts data.
     * @return bool|null
    */
    public function getIsContactsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isContactsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isContactsEnabled'");
    }

    /**
     * Gets the isDemographicsEnabled property value. Indicates whether the user specified to import optional demographics data.
     * @return bool|null
    */
    public function getIsDemographicsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isDemographicsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDemographicsEnabled'");
    }

    /**
     * Gets the isFlagsEnabled property value. Indicates whether the user specified to import optional flags data.
     * @return bool|null
    */
    public function getIsFlagsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isFlagsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isFlagsEnabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('apiVersion', $this->getApiVersion());
        $writer->writeBooleanValue('isContactsEnabled', $this->getIsContactsEnabled());
        $writer->writeBooleanValue('isDemographicsEnabled', $this->getIsDemographicsEnabled());
        $writer->writeBooleanValue('isFlagsEnabled', $this->getIsFlagsEnabled());
    }

    /**
     * Sets the apiVersion property value. The API version of the OneRoster source. Example: 1.1, 1.2
     * @param string|null $value Value to set for the apiVersion property.
    */
    public function setApiVersion(?string $value): void {
        $this->getBackingStore()->set('apiVersion', $value);
    }

    /**
     * Sets the isContactsEnabled property value. Indicates whether the user specified to import optional contacts data.
     * @param bool|null $value Value to set for the isContactsEnabled property.
    */
    public function setIsContactsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isContactsEnabled', $value);
    }

    /**
     * Sets the isDemographicsEnabled property value. Indicates whether the user specified to import optional demographics data.
     * @param bool|null $value Value to set for the isDemographicsEnabled property.
    */
    public function setIsDemographicsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isDemographicsEnabled', $value);
    }

    /**
     * Sets the isFlagsEnabled property value. Indicates whether the user specified to import optional flags data.
     * @param bool|null $value Value to set for the isFlagsEnabled property.
    */
    public function setIsFlagsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isFlagsEnabled', $value);
    }

}
