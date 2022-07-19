<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceEnrollmentPlatformRestrictionsConfiguration extends DeviceEnrollmentConfiguration implements Parsable 
{
    /**
     * @var DeviceEnrollmentPlatformRestriction|null $androidForWorkRestriction Android for work restrictions based on platform, platform operating system version, and device ownership
    */
    private ?DeviceEnrollmentPlatformRestriction $androidForWorkRestriction = null;
    
    /**
     * @var DeviceEnrollmentPlatformRestriction|null $androidRestriction Android restrictions based on platform, platform operating system version, and device ownership
    */
    private ?DeviceEnrollmentPlatformRestriction $androidRestriction = null;
    
    /**
     * @var DeviceEnrollmentPlatformRestriction|null $iosRestriction Ios restrictions based on platform, platform operating system version, and device ownership
    */
    private ?DeviceEnrollmentPlatformRestriction $iosRestriction = null;
    
    /**
     * @var DeviceEnrollmentPlatformRestriction|null $macOSRestriction Mac restrictions based on platform, platform operating system version, and device ownership
    */
    private ?DeviceEnrollmentPlatformRestriction $macOSRestriction = null;
    
    /**
     * @var DeviceEnrollmentPlatformRestriction|null $macRestriction Mac restrictions based on platform, platform operating system version, and device ownership
    */
    private ?DeviceEnrollmentPlatformRestriction $macRestriction = null;
    
    /**
     * @var DeviceEnrollmentPlatformRestriction|null $windowsHomeSkuRestriction Windows Home Sku restrictions based on platform, platform operating system version, and device ownership
    */
    private ?DeviceEnrollmentPlatformRestriction $windowsHomeSkuRestriction = null;
    
    /**
     * @var DeviceEnrollmentPlatformRestriction|null $windowsMobileRestriction Windows mobile restrictions based on platform, platform operating system version, and device ownership
    */
    private ?DeviceEnrollmentPlatformRestriction $windowsMobileRestriction = null;
    
    /**
     * @var DeviceEnrollmentPlatformRestriction|null $windowsRestriction Windows restrictions based on platform, platform operating system version, and device ownership
    */
    private ?DeviceEnrollmentPlatformRestriction $windowsRestriction = null;
    
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
     * Gets the androidForWorkRestriction property value. Android for work restrictions based on platform, platform operating system version, and device ownership
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getAndroidForWorkRestriction(): ?DeviceEnrollmentPlatformRestriction {
        return $this->androidForWorkRestriction;
    }

    /**
     * Gets the androidRestriction property value. Android restrictions based on platform, platform operating system version, and device ownership
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getAndroidRestriction(): ?DeviceEnrollmentPlatformRestriction {
        return $this->androidRestriction;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'androidForWorkRestriction' => function (ParseNode $n) use ($o) { $o->setAndroidForWorkRestriction($n->getObjectValue(array(DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'))); },
            'androidRestriction' => function (ParseNode $n) use ($o) { $o->setAndroidRestriction($n->getObjectValue(array(DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'))); },
            'iosRestriction' => function (ParseNode $n) use ($o) { $o->setIosRestriction($n->getObjectValue(array(DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'))); },
            'macOSRestriction' => function (ParseNode $n) use ($o) { $o->setMacOSRestriction($n->getObjectValue(array(DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'))); },
            'macRestriction' => function (ParseNode $n) use ($o) { $o->setMacRestriction($n->getObjectValue(array(DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'))); },
            'windowsHomeSkuRestriction' => function (ParseNode $n) use ($o) { $o->setWindowsHomeSkuRestriction($n->getObjectValue(array(DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'))); },
            'windowsMobileRestriction' => function (ParseNode $n) use ($o) { $o->setWindowsMobileRestriction($n->getObjectValue(array(DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'))); },
            'windowsRestriction' => function (ParseNode $n) use ($o) { $o->setWindowsRestriction($n->getObjectValue(array(DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the iosRestriction property value. Ios restrictions based on platform, platform operating system version, and device ownership
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getIosRestriction(): ?DeviceEnrollmentPlatformRestriction {
        return $this->iosRestriction;
    }

    /**
     * Gets the macOSRestriction property value. Mac restrictions based on platform, platform operating system version, and device ownership
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getMacOSRestriction(): ?DeviceEnrollmentPlatformRestriction {
        return $this->macOSRestriction;
    }

    /**
     * Gets the macRestriction property value. Mac restrictions based on platform, platform operating system version, and device ownership
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getMacRestriction(): ?DeviceEnrollmentPlatformRestriction {
        return $this->macRestriction;
    }

    /**
     * Gets the windowsHomeSkuRestriction property value. Windows Home Sku restrictions based on platform, platform operating system version, and device ownership
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getWindowsHomeSkuRestriction(): ?DeviceEnrollmentPlatformRestriction {
        return $this->windowsHomeSkuRestriction;
    }

    /**
     * Gets the windowsMobileRestriction property value. Windows mobile restrictions based on platform, platform operating system version, and device ownership
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getWindowsMobileRestriction(): ?DeviceEnrollmentPlatformRestriction {
        return $this->windowsMobileRestriction;
    }

    /**
     * Gets the windowsRestriction property value. Windows restrictions based on platform, platform operating system version, and device ownership
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getWindowsRestriction(): ?DeviceEnrollmentPlatformRestriction {
        return $this->windowsRestriction;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('androidForWorkRestriction', $this->androidForWorkRestriction);
        $writer->writeObjectValue('androidRestriction', $this->androidRestriction);
        $writer->writeObjectValue('iosRestriction', $this->iosRestriction);
        $writer->writeObjectValue('macOSRestriction', $this->macOSRestriction);
        $writer->writeObjectValue('macRestriction', $this->macRestriction);
        $writer->writeObjectValue('windowsHomeSkuRestriction', $this->windowsHomeSkuRestriction);
        $writer->writeObjectValue('windowsMobileRestriction', $this->windowsMobileRestriction);
        $writer->writeObjectValue('windowsRestriction', $this->windowsRestriction);
    }

    /**
     * Sets the androidForWorkRestriction property value. Android for work restrictions based on platform, platform operating system version, and device ownership
     *  @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the androidForWorkRestriction property.
    */
    public function setAndroidForWorkRestriction(?DeviceEnrollmentPlatformRestriction $value ): void {
        $this->androidForWorkRestriction = $value;
    }

    /**
     * Sets the androidRestriction property value. Android restrictions based on platform, platform operating system version, and device ownership
     *  @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the androidRestriction property.
    */
    public function setAndroidRestriction(?DeviceEnrollmentPlatformRestriction $value ): void {
        $this->androidRestriction = $value;
    }

    /**
     * Sets the iosRestriction property value. Ios restrictions based on platform, platform operating system version, and device ownership
     *  @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the iosRestriction property.
    */
    public function setIosRestriction(?DeviceEnrollmentPlatformRestriction $value ): void {
        $this->iosRestriction = $value;
    }

    /**
     * Sets the macOSRestriction property value. Mac restrictions based on platform, platform operating system version, and device ownership
     *  @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the macOSRestriction property.
    */
    public function setMacOSRestriction(?DeviceEnrollmentPlatformRestriction $value ): void {
        $this->macOSRestriction = $value;
    }

    /**
     * Sets the macRestriction property value. Mac restrictions based on platform, platform operating system version, and device ownership
     *  @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the macRestriction property.
    */
    public function setMacRestriction(?DeviceEnrollmentPlatformRestriction $value ): void {
        $this->macRestriction = $value;
    }

    /**
     * Sets the windowsHomeSkuRestriction property value. Windows Home Sku restrictions based on platform, platform operating system version, and device ownership
     *  @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the windowsHomeSkuRestriction property.
    */
    public function setWindowsHomeSkuRestriction(?DeviceEnrollmentPlatformRestriction $value ): void {
        $this->windowsHomeSkuRestriction = $value;
    }

    /**
     * Sets the windowsMobileRestriction property value. Windows mobile restrictions based on platform, platform operating system version, and device ownership
     *  @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the windowsMobileRestriction property.
    */
    public function setWindowsMobileRestriction(?DeviceEnrollmentPlatformRestriction $value ): void {
        $this->windowsMobileRestriction = $value;
    }

    /**
     * Sets the windowsRestriction property value. Windows restrictions based on platform, platform operating system version, and device ownership
     *  @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the windowsRestriction property.
    */
    public function setWindowsRestriction(?DeviceEnrollmentPlatformRestriction $value ): void {
        $this->windowsRestriction = $value;
    }

}
