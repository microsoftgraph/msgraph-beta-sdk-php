<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsBaseline extends Entity implements Parsable 
{
    /**
     * @var UserExperienceAnalyticsCategory|null $appHealthMetrics The user experience analytics app health metrics.
    */
    private ?UserExperienceAnalyticsCategory $appHealthMetrics = null;
    
    /**
     * @var UserExperienceAnalyticsCategory|null $batteryHealthMetrics The user experience analytics battery health metrics.
    */
    private ?UserExperienceAnalyticsCategory $batteryHealthMetrics = null;
    
    /**
     * @var UserExperienceAnalyticsCategory|null $bestPracticesMetrics The user experience analytics best practices metrics.
    */
    private ?UserExperienceAnalyticsCategory $bestPracticesMetrics = null;
    
    /**
     * @var DateTime|null $createdDateTime The date the custom baseline was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var UserExperienceAnalyticsCategory|null $deviceBootPerformanceMetrics The user experience analytics device boot performance metrics.
    */
    private ?UserExperienceAnalyticsCategory $deviceBootPerformanceMetrics = null;
    
    /**
     * @var string|null $displayName The name of the user experience analytics baseline.
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $isBuiltIn Signifies if the current baseline is the commercial median baseline or a custom baseline.
    */
    private ?bool $isBuiltIn = null;
    
    /**
     * @var UserExperienceAnalyticsCategory|null $rebootAnalyticsMetrics The user experience analytics reboot analytics metrics.
    */
    private ?UserExperienceAnalyticsCategory $rebootAnalyticsMetrics = null;
    
    /**
     * @var UserExperienceAnalyticsCategory|null $resourcePerformanceMetrics The user experience analytics resource performance metrics.
    */
    private ?UserExperienceAnalyticsCategory $resourcePerformanceMetrics = null;
    
    /**
     * @var UserExperienceAnalyticsCategory|null $workFromAnywhereMetrics The user experience analytics work from anywhere metrics.
    */
    private ?UserExperienceAnalyticsCategory $workFromAnywhereMetrics = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsBaseline and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userExperienceAnalyticsBaseline');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsBaseline
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsBaseline {
        return new UserExperienceAnalyticsBaseline();
    }

    /**
     * Gets the appHealthMetrics property value. The user experience analytics app health metrics.
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getAppHealthMetrics(): ?UserExperienceAnalyticsCategory {
        return $this->appHealthMetrics;
    }

    /**
     * Gets the batteryHealthMetrics property value. The user experience analytics battery health metrics.
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getBatteryHealthMetrics(): ?UserExperienceAnalyticsCategory {
        return $this->batteryHealthMetrics;
    }

    /**
     * Gets the bestPracticesMetrics property value. The user experience analytics best practices metrics.
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getBestPracticesMetrics(): ?UserExperienceAnalyticsCategory {
        return $this->bestPracticesMetrics;
    }

    /**
     * Gets the createdDateTime property value. The date the custom baseline was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the deviceBootPerformanceMetrics property value. The user experience analytics device boot performance metrics.
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getDeviceBootPerformanceMetrics(): ?UserExperienceAnalyticsCategory {
        return $this->deviceBootPerformanceMetrics;
    }

    /**
     * Gets the displayName property value. The name of the user experience analytics baseline.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appHealthMetrics' => function (ParseNode $n) use ($o) { $o->setAppHealthMetrics($n->getObjectValue(array(UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'))); },
            'batteryHealthMetrics' => function (ParseNode $n) use ($o) { $o->setBatteryHealthMetrics($n->getObjectValue(array(UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'))); },
            'bestPracticesMetrics' => function (ParseNode $n) use ($o) { $o->setBestPracticesMetrics($n->getObjectValue(array(UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'deviceBootPerformanceMetrics' => function (ParseNode $n) use ($o) { $o->setDeviceBootPerformanceMetrics($n->getObjectValue(array(UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'isBuiltIn' => function (ParseNode $n) use ($o) { $o->setIsBuiltIn($n->getBooleanValue()); },
            'rebootAnalyticsMetrics' => function (ParseNode $n) use ($o) { $o->setRebootAnalyticsMetrics($n->getObjectValue(array(UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'))); },
            'resourcePerformanceMetrics' => function (ParseNode $n) use ($o) { $o->setResourcePerformanceMetrics($n->getObjectValue(array(UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'))); },
            'workFromAnywhereMetrics' => function (ParseNode $n) use ($o) { $o->setWorkFromAnywhereMetrics($n->getObjectValue(array(UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the isBuiltIn property value. Signifies if the current baseline is the commercial median baseline or a custom baseline.
     * @return bool|null
    */
    public function getIsBuiltIn(): ?bool {
        return $this->isBuiltIn;
    }

    /**
     * Gets the rebootAnalyticsMetrics property value. The user experience analytics reboot analytics metrics.
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getRebootAnalyticsMetrics(): ?UserExperienceAnalyticsCategory {
        return $this->rebootAnalyticsMetrics;
    }

    /**
     * Gets the resourcePerformanceMetrics property value. The user experience analytics resource performance metrics.
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getResourcePerformanceMetrics(): ?UserExperienceAnalyticsCategory {
        return $this->resourcePerformanceMetrics;
    }

    /**
     * Gets the workFromAnywhereMetrics property value. The user experience analytics work from anywhere metrics.
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getWorkFromAnywhereMetrics(): ?UserExperienceAnalyticsCategory {
        return $this->workFromAnywhereMetrics;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('appHealthMetrics', $this->appHealthMetrics);
        $writer->writeObjectValue('batteryHealthMetrics', $this->batteryHealthMetrics);
        $writer->writeObjectValue('bestPracticesMetrics', $this->bestPracticesMetrics);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('deviceBootPerformanceMetrics', $this->deviceBootPerformanceMetrics);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isBuiltIn', $this->isBuiltIn);
        $writer->writeObjectValue('rebootAnalyticsMetrics', $this->rebootAnalyticsMetrics);
        $writer->writeObjectValue('resourcePerformanceMetrics', $this->resourcePerformanceMetrics);
        $writer->writeObjectValue('workFromAnywhereMetrics', $this->workFromAnywhereMetrics);
    }

    /**
     * Sets the appHealthMetrics property value. The user experience analytics app health metrics.
     *  @param UserExperienceAnalyticsCategory|null $value Value to set for the appHealthMetrics property.
    */
    public function setAppHealthMetrics(?UserExperienceAnalyticsCategory $value ): void {
        $this->appHealthMetrics = $value;
    }

    /**
     * Sets the batteryHealthMetrics property value. The user experience analytics battery health metrics.
     *  @param UserExperienceAnalyticsCategory|null $value Value to set for the batteryHealthMetrics property.
    */
    public function setBatteryHealthMetrics(?UserExperienceAnalyticsCategory $value ): void {
        $this->batteryHealthMetrics = $value;
    }

    /**
     * Sets the bestPracticesMetrics property value. The user experience analytics best practices metrics.
     *  @param UserExperienceAnalyticsCategory|null $value Value to set for the bestPracticesMetrics property.
    */
    public function setBestPracticesMetrics(?UserExperienceAnalyticsCategory $value ): void {
        $this->bestPracticesMetrics = $value;
    }

    /**
     * Sets the createdDateTime property value. The date the custom baseline was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the deviceBootPerformanceMetrics property value. The user experience analytics device boot performance metrics.
     *  @param UserExperienceAnalyticsCategory|null $value Value to set for the deviceBootPerformanceMetrics property.
    */
    public function setDeviceBootPerformanceMetrics(?UserExperienceAnalyticsCategory $value ): void {
        $this->deviceBootPerformanceMetrics = $value;
    }

    /**
     * Sets the displayName property value. The name of the user experience analytics baseline.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isBuiltIn property value. Signifies if the current baseline is the commercial median baseline or a custom baseline.
     *  @param bool|null $value Value to set for the isBuiltIn property.
    */
    public function setIsBuiltIn(?bool $value ): void {
        $this->isBuiltIn = $value;
    }

    /**
     * Sets the rebootAnalyticsMetrics property value. The user experience analytics reboot analytics metrics.
     *  @param UserExperienceAnalyticsCategory|null $value Value to set for the rebootAnalyticsMetrics property.
    */
    public function setRebootAnalyticsMetrics(?UserExperienceAnalyticsCategory $value ): void {
        $this->rebootAnalyticsMetrics = $value;
    }

    /**
     * Sets the resourcePerformanceMetrics property value. The user experience analytics resource performance metrics.
     *  @param UserExperienceAnalyticsCategory|null $value Value to set for the resourcePerformanceMetrics property.
    */
    public function setResourcePerformanceMetrics(?UserExperienceAnalyticsCategory $value ): void {
        $this->resourcePerformanceMetrics = $value;
    }

    /**
     * Sets the workFromAnywhereMetrics property value. The user experience analytics work from anywhere metrics.
     *  @param UserExperienceAnalyticsCategory|null $value Value to set for the workFromAnywhereMetrics property.
    */
    public function setWorkFromAnywhereMetrics(?UserExperienceAnalyticsCategory $value ): void {
        $this->workFromAnywhereMetrics = $value;
    }

}
