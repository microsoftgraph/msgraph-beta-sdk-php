<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SourceSystemDefinition extends Entity implements Parsable 
{
    /**
     * Instantiates a new sourceSystemDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SourceSystemDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SourceSystemDefinition {
        return new SourceSystemDefinition();
    }

    /**
     * Gets the displayName property value. The name of the source system. Maximum supported length is 100 characters.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'userMatchingSettings' => fn(ParseNode $n) => $o->setUserMatchingSettings($n->getCollectionOfObjectValues([UserMatchingSetting::class, 'createFromDiscriminatorValue'])),
            'vendor' => fn(ParseNode $n) => $o->setVendor($n->getStringValue()),
        ]);
    }

    /**
     * Gets the userMatchingSettings property value. A collection of user matching settings by roleGroup.
     * @return array<UserMatchingSetting>|null
    */
    public function getUserMatchingSettings(): ?array {
        $val = $this->getBackingStore()->get('userMatchingSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserMatchingSetting::class);
            /** @var array<UserMatchingSetting>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userMatchingSettings'");
    }

    /**
     * Gets the vendor property value. The name of the vendor who supplies the source system. Maximum supported length is 100 characters.
     * @return string|null
    */
    public function getVendor(): ?string {
        $val = $this->getBackingStore()->get('vendor');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vendor'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('userMatchingSettings', $this->getUserMatchingSettings());
        $writer->writeStringValue('vendor', $this->getVendor());
    }

    /**
     * Sets the displayName property value. The name of the source system. Maximum supported length is 100 characters.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the userMatchingSettings property value. A collection of user matching settings by roleGroup.
     * @param array<UserMatchingSetting>|null $value Value to set for the userMatchingSettings property.
    */
    public function setUserMatchingSettings(?array $value): void {
        $this->getBackingStore()->set('userMatchingSettings', $value);
    }

    /**
     * Sets the vendor property value. The name of the vendor who supplies the source system. Maximum supported length is 100 characters.
     * @param string|null $value Value to set for the vendor property.
    */
    public function setVendor(?string $value): void {
        $this->getBackingStore()->set('vendor', $value);
    }

}
