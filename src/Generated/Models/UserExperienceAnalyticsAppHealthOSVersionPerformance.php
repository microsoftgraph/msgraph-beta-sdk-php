<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsAppHealthOSVersionPerformance extends Entity implements Parsable 
{
    /**
     * @var int|null $activeDeviceCount The number of active devices for the OS version. Valid values -2147483648 to 2147483647
    */
    private ?int $activeDeviceCount = null;
    
    /**
     * @var int|null $meanTimeToFailureInMinutes The mean time to failure for the OS version in minutes. Valid values -2147483648 to 2147483647
    */
    private ?int $meanTimeToFailureInMinutes = null;
    
    /**
     * @var string|null $osBuildNumber The OS build number installed on the device.
    */
    private ?string $osBuildNumber = null;
    
    /**
     * @var string|null $osVersion The OS version installed on the device.
    */
    private ?string $osVersion = null;
    
    /**
     * @var float|null $osVersionAppHealthScore The app health score of the OS version. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    */
    private ?float $osVersionAppHealthScore = null;
    
    /**
     * @var string|null $osVersionAppHealthStatus The overall app health status of the OS version.
    */
    private ?string $osVersionAppHealthStatus = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthOSVersionPerformance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userExperienceAnalyticsAppHealthOSVersionPerformance');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsAppHealthOSVersionPerformance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsAppHealthOSVersionPerformance {
        return new UserExperienceAnalyticsAppHealthOSVersionPerformance();
    }

    /**
     * Gets the activeDeviceCount property value. The number of active devices for the OS version. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getActiveDeviceCount(): ?int {
        return $this->activeDeviceCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeDeviceCount' => function (ParseNode $n) use ($o) { $o->setActiveDeviceCount($n->getIntegerValue()); },
            'meanTimeToFailureInMinutes' => function (ParseNode $n) use ($o) { $o->setMeanTimeToFailureInMinutes($n->getIntegerValue()); },
            'osBuildNumber' => function (ParseNode $n) use ($o) { $o->setOsBuildNumber($n->getStringValue()); },
            'osVersion' => function (ParseNode $n) use ($o) { $o->setOsVersion($n->getStringValue()); },
            'osVersionAppHealthScore' => function (ParseNode $n) use ($o) { $o->setOsVersionAppHealthScore($n->getFloatValue()); },
            'osVersionAppHealthStatus' => function (ParseNode $n) use ($o) { $o->setOsVersionAppHealthStatus($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the meanTimeToFailureInMinutes property value. The mean time to failure for the OS version in minutes. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getMeanTimeToFailureInMinutes(): ?int {
        return $this->meanTimeToFailureInMinutes;
    }

    /**
     * Gets the osBuildNumber property value. The OS build number installed on the device.
     * @return string|null
    */
    public function getOsBuildNumber(): ?string {
        return $this->osBuildNumber;
    }

    /**
     * Gets the osVersion property value. The OS version installed on the device.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->osVersion;
    }

    /**
     * Gets the osVersionAppHealthScore property value. The app health score of the OS version. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getOsVersionAppHealthScore(): ?float {
        return $this->osVersionAppHealthScore;
    }

    /**
     * Gets the osVersionAppHealthStatus property value. The overall app health status of the OS version.
     * @return string|null
    */
    public function getOsVersionAppHealthStatus(): ?string {
        return $this->osVersionAppHealthStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('activeDeviceCount', $this->activeDeviceCount);
        $writer->writeIntegerValue('meanTimeToFailureInMinutes', $this->meanTimeToFailureInMinutes);
        $writer->writeStringValue('osBuildNumber', $this->osBuildNumber);
        $writer->writeStringValue('osVersion', $this->osVersion);
        $writer->writeFloatValue('osVersionAppHealthScore', $this->osVersionAppHealthScore);
        $writer->writeStringValue('osVersionAppHealthStatus', $this->osVersionAppHealthStatus);
    }

    /**
     * Sets the activeDeviceCount property value. The number of active devices for the OS version. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the activeDeviceCount property.
    */
    public function setActiveDeviceCount(?int $value ): void {
        $this->activeDeviceCount = $value;
    }

    /**
     * Sets the meanTimeToFailureInMinutes property value. The mean time to failure for the OS version in minutes. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the meanTimeToFailureInMinutes property.
    */
    public function setMeanTimeToFailureInMinutes(?int $value ): void {
        $this->meanTimeToFailureInMinutes = $value;
    }

    /**
     * Sets the osBuildNumber property value. The OS build number installed on the device.
     *  @param string|null $value Value to set for the osBuildNumber property.
    */
    public function setOsBuildNumber(?string $value ): void {
        $this->osBuildNumber = $value;
    }

    /**
     * Sets the osVersion property value. The OS version installed on the device.
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value ): void {
        $this->osVersion = $value;
    }

    /**
     * Sets the osVersionAppHealthScore property value. The app health score of the OS version. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the osVersionAppHealthScore property.
    */
    public function setOsVersionAppHealthScore(?float $value ): void {
        $this->osVersionAppHealthScore = $value;
    }

    /**
     * Sets the osVersionAppHealthStatus property value. The overall app health status of the OS version.
     *  @param string|null $value Value to set for the osVersionAppHealthStatus property.
    */
    public function setOsVersionAppHealthStatus(?string $value ): void {
        $this->osVersionAppHealthStatus = $value;
    }

}
