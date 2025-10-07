<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Default Device Enrollment Platform Restrictions Configuration that restricts the types of devices a user can enroll
*/
class DeviceEnrollmentPlatformRestrictionsConfiguration extends DeviceEnrollmentConfiguration implements Parsable 
{
    /**
     * Instantiates a new DeviceEnrollmentPlatformRestrictionsConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceEnrollmentPlatformRestrictionsConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceEnrollmentPlatformRestrictionsConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceEnrollmentPlatformRestrictionsConfiguration {
        return new DeviceEnrollmentPlatformRestrictionsConfiguration();
    }

    /**
     * Gets the androidForWorkRestriction property value. Indicates restrictions for Android For Work platform.
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getAndroidForWorkRestriction(): ?DeviceEnrollmentPlatformRestriction {
        $val = $this->getBackingStore()->get('androidForWorkRestriction');
        if (is_null($val) || $val instanceof DeviceEnrollmentPlatformRestriction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidForWorkRestriction'");
    }

    /**
     * Gets the androidRestriction property value. Indicates restrictions for Android platform.
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getAndroidRestriction(): ?DeviceEnrollmentPlatformRestriction {
        $val = $this->getBackingStore()->get('androidRestriction');
        if (is_null($val) || $val instanceof DeviceEnrollmentPlatformRestriction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidRestriction'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'androidForWorkRestriction' => fn(ParseNode $n) => $o->setAndroidForWorkRestriction($n->getObjectValue([DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'])),
            'androidRestriction' => fn(ParseNode $n) => $o->setAndroidRestriction($n->getObjectValue([DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'])),
            'iosRestriction' => fn(ParseNode $n) => $o->setIosRestriction($n->getObjectValue([DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'])),
            'macOSRestriction' => fn(ParseNode $n) => $o->setMacOSRestriction($n->getObjectValue([DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'])),
            'macRestriction' => fn(ParseNode $n) => $o->setMacRestriction($n->getObjectValue([DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'])),
            'tvosRestriction' => fn(ParseNode $n) => $o->setTvosRestriction($n->getObjectValue([DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'])),
            'visionOSRestriction' => fn(ParseNode $n) => $o->setVisionOSRestriction($n->getObjectValue([DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'])),
            'windowsHomeSkuRestriction' => fn(ParseNode $n) => $o->setWindowsHomeSkuRestriction($n->getObjectValue([DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'])),
            'windowsMobileRestriction' => fn(ParseNode $n) => $o->setWindowsMobileRestriction($n->getObjectValue([DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'])),
            'windowsRestriction' => fn(ParseNode $n) => $o->setWindowsRestriction($n->getObjectValue([DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the iosRestriction property value. Indicates restrictions for IOS platform.
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getIosRestriction(): ?DeviceEnrollmentPlatformRestriction {
        $val = $this->getBackingStore()->get('iosRestriction');
        if (is_null($val) || $val instanceof DeviceEnrollmentPlatformRestriction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iosRestriction'");
    }

    /**
     * Gets the macOSRestriction property value. Indicates restrictions for MacOS platform.
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getMacOSRestriction(): ?DeviceEnrollmentPlatformRestriction {
        $val = $this->getBackingStore()->get('macOSRestriction');
        if (is_null($val) || $val instanceof DeviceEnrollmentPlatformRestriction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'macOSRestriction'");
    }

    /**
     * Gets the macRestriction property value. Indicates restrictions for Mac platform.
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getMacRestriction(): ?DeviceEnrollmentPlatformRestriction {
        $val = $this->getBackingStore()->get('macRestriction');
        if (is_null($val) || $val instanceof DeviceEnrollmentPlatformRestriction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'macRestriction'");
    }

    /**
     * Gets the tvosRestriction property value. Indicates restrictions for TvOS platform.
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getTvosRestriction(): ?DeviceEnrollmentPlatformRestriction {
        $val = $this->getBackingStore()->get('tvosRestriction');
        if (is_null($val) || $val instanceof DeviceEnrollmentPlatformRestriction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tvosRestriction'");
    }

    /**
     * Gets the visionOSRestriction property value. Indicates restrictions for VisionOS platform.
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getVisionOSRestriction(): ?DeviceEnrollmentPlatformRestriction {
        $val = $this->getBackingStore()->get('visionOSRestriction');
        if (is_null($val) || $val instanceof DeviceEnrollmentPlatformRestriction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'visionOSRestriction'");
    }

    /**
     * Gets the windowsHomeSkuRestriction property value. Indicates restrictions for Windows HomeSku platform.
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getWindowsHomeSkuRestriction(): ?DeviceEnrollmentPlatformRestriction {
        $val = $this->getBackingStore()->get('windowsHomeSkuRestriction');
        if (is_null($val) || $val instanceof DeviceEnrollmentPlatformRestriction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsHomeSkuRestriction'");
    }

    /**
     * Gets the windowsMobileRestriction property value. Indicates restrictions for Windows Mobile platform.
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getWindowsMobileRestriction(): ?DeviceEnrollmentPlatformRestriction {
        $val = $this->getBackingStore()->get('windowsMobileRestriction');
        if (is_null($val) || $val instanceof DeviceEnrollmentPlatformRestriction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsMobileRestriction'");
    }

    /**
     * Gets the windowsRestriction property value. Indicates restrictions for Windows platform.
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getWindowsRestriction(): ?DeviceEnrollmentPlatformRestriction {
        $val = $this->getBackingStore()->get('windowsRestriction');
        if (is_null($val) || $val instanceof DeviceEnrollmentPlatformRestriction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsRestriction'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('androidForWorkRestriction', $this->getAndroidForWorkRestriction());
        $writer->writeObjectValue('androidRestriction', $this->getAndroidRestriction());
        $writer->writeObjectValue('iosRestriction', $this->getIosRestriction());
        $writer->writeObjectValue('macOSRestriction', $this->getMacOSRestriction());
        $writer->writeObjectValue('macRestriction', $this->getMacRestriction());
        $writer->writeObjectValue('tvosRestriction', $this->getTvosRestriction());
        $writer->writeObjectValue('visionOSRestriction', $this->getVisionOSRestriction());
        $writer->writeObjectValue('windowsHomeSkuRestriction', $this->getWindowsHomeSkuRestriction());
        $writer->writeObjectValue('windowsMobileRestriction', $this->getWindowsMobileRestriction());
        $writer->writeObjectValue('windowsRestriction', $this->getWindowsRestriction());
    }

    /**
     * Sets the androidForWorkRestriction property value. Indicates restrictions for Android For Work platform.
     * @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the androidForWorkRestriction property.
    */
    public function setAndroidForWorkRestriction(?DeviceEnrollmentPlatformRestriction $value): void {
        $this->getBackingStore()->set('androidForWorkRestriction', $value);
    }

    /**
     * Sets the androidRestriction property value. Indicates restrictions for Android platform.
     * @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the androidRestriction property.
    */
    public function setAndroidRestriction(?DeviceEnrollmentPlatformRestriction $value): void {
        $this->getBackingStore()->set('androidRestriction', $value);
    }

    /**
     * Sets the iosRestriction property value. Indicates restrictions for IOS platform.
     * @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the iosRestriction property.
    */
    public function setIosRestriction(?DeviceEnrollmentPlatformRestriction $value): void {
        $this->getBackingStore()->set('iosRestriction', $value);
    }

    /**
     * Sets the macOSRestriction property value. Indicates restrictions for MacOS platform.
     * @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the macOSRestriction property.
    */
    public function setMacOSRestriction(?DeviceEnrollmentPlatformRestriction $value): void {
        $this->getBackingStore()->set('macOSRestriction', $value);
    }

    /**
     * Sets the macRestriction property value. Indicates restrictions for Mac platform.
     * @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the macRestriction property.
    */
    public function setMacRestriction(?DeviceEnrollmentPlatformRestriction $value): void {
        $this->getBackingStore()->set('macRestriction', $value);
    }

    /**
     * Sets the tvosRestriction property value. Indicates restrictions for TvOS platform.
     * @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the tvosRestriction property.
    */
    public function setTvosRestriction(?DeviceEnrollmentPlatformRestriction $value): void {
        $this->getBackingStore()->set('tvosRestriction', $value);
    }

    /**
     * Sets the visionOSRestriction property value. Indicates restrictions for VisionOS platform.
     * @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the visionOSRestriction property.
    */
    public function setVisionOSRestriction(?DeviceEnrollmentPlatformRestriction $value): void {
        $this->getBackingStore()->set('visionOSRestriction', $value);
    }

    /**
     * Sets the windowsHomeSkuRestriction property value. Indicates restrictions for Windows HomeSku platform.
     * @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the windowsHomeSkuRestriction property.
    */
    public function setWindowsHomeSkuRestriction(?DeviceEnrollmentPlatformRestriction $value): void {
        $this->getBackingStore()->set('windowsHomeSkuRestriction', $value);
    }

    /**
     * Sets the windowsMobileRestriction property value. Indicates restrictions for Windows Mobile platform.
     * @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the windowsMobileRestriction property.
    */
    public function setWindowsMobileRestriction(?DeviceEnrollmentPlatformRestriction $value): void {
        $this->getBackingStore()->set('windowsMobileRestriction', $value);
    }

    /**
     * Sets the windowsRestriction property value. Indicates restrictions for Windows platform.
     * @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the windowsRestriction property.
    */
    public function setWindowsRestriction(?DeviceEnrollmentPlatformRestriction $value): void {
        $this->getBackingStore()->set('windowsRestriction', $value);
    }

}
