<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This entity defines different Windows Operating System products, like 'Windows 11 22H1', 'Windows 11 22H2' etc., along with their available configurations.
*/
class ManagedDeviceWindowsOperatingSystemImage extends Entity implements Parsable 
{
    /**
     * Instantiates a new ManagedDeviceWindowsOperatingSystemImage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedDeviceWindowsOperatingSystemImage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedDeviceWindowsOperatingSystemImage {
        return new ManagedDeviceWindowsOperatingSystemImage();
    }

    /**
     * Gets the availableUpdates property value. Indicates the available Quality/Security updates for a specific Windows product version (example: Windows 11 22H1), for upto last 3 Patch Tuesdays . This value in the API response would be updated 2-3 days after every Patch Tuesday. Supports: $filter, $select, $top, $skip. Read-only.
     * @return array<ManagedDeviceWindowsOperatingSystemUpdate>|null
    */
    public function getAvailableUpdates(): ?array {
        $val = $this->getBackingStore()->get('availableUpdates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedDeviceWindowsOperatingSystemUpdate::class);
            /** @var array<ManagedDeviceWindowsOperatingSystemUpdate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'availableUpdates'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'availableUpdates' => fn(ParseNode $n) => $o->setAvailableUpdates($n->getCollectionOfObjectValues([ManagedDeviceWindowsOperatingSystemUpdate::class, 'createFromDiscriminatorValue'])),
            'supportedArchitectures' => fn(ParseNode $n) => $o->setSupportedArchitectures($n->getCollectionOfEnumValues(ManagedDeviceArchitecture::class)),
            'supportedEditions' => fn(ParseNode $n) => $o->setSupportedEditions($n->getCollectionOfObjectValues([ManagedDeviceWindowsOperatingSystemEdition::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the supportedArchitectures property value. Indicates the list of architectures supported by the image. E.g. ['ARM64','X86']. Supports: $filter, $select, $top, $skip. Read-only.
     * @return array<ManagedDeviceArchitecture>|null
    */
    public function getSupportedArchitectures(): ?array {
        $val = $this->getBackingStore()->get('supportedArchitectures');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedDeviceArchitecture::class);
            /** @var array<ManagedDeviceArchitecture>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedArchitectures'");
    }

    /**
     * Gets the supportedEditions property value. Indicates the list of editions supported by the image along with their support dates. Supports: $filter, $select, $top, $skip. Read-only.
     * @return array<ManagedDeviceWindowsOperatingSystemEdition>|null
    */
    public function getSupportedEditions(): ?array {
        $val = $this->getBackingStore()->get('supportedEditions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedDeviceWindowsOperatingSystemEdition::class);
            /** @var array<ManagedDeviceWindowsOperatingSystemEdition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedEditions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('availableUpdates', $this->getAvailableUpdates());
        $writer->writeCollectionOfEnumValues('supportedArchitectures', $this->getSupportedArchitectures());
        $writer->writeCollectionOfObjectValues('supportedEditions', $this->getSupportedEditions());
    }

    /**
     * Sets the availableUpdates property value. Indicates the available Quality/Security updates for a specific Windows product version (example: Windows 11 22H1), for upto last 3 Patch Tuesdays . This value in the API response would be updated 2-3 days after every Patch Tuesday. Supports: $filter, $select, $top, $skip. Read-only.
     * @param array<ManagedDeviceWindowsOperatingSystemUpdate>|null $value Value to set for the availableUpdates property.
    */
    public function setAvailableUpdates(?array $value): void {
        $this->getBackingStore()->set('availableUpdates', $value);
    }

    /**
     * Sets the supportedArchitectures property value. Indicates the list of architectures supported by the image. E.g. ['ARM64','X86']. Supports: $filter, $select, $top, $skip. Read-only.
     * @param array<ManagedDeviceArchitecture>|null $value Value to set for the supportedArchitectures property.
    */
    public function setSupportedArchitectures(?array $value): void {
        $this->getBackingStore()->set('supportedArchitectures', $value);
    }

    /**
     * Sets the supportedEditions property value. Indicates the list of editions supported by the image along with their support dates. Supports: $filter, $select, $top, $skip. Read-only.
     * @param array<ManagedDeviceWindowsOperatingSystemEdition>|null $value Value to set for the supportedEditions property.
    */
    public function setSupportedEditions(?array $value): void {
        $this->getBackingStore()->set('supportedEditions', $value);
    }

}
