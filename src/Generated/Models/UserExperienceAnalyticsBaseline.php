<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsBaseline extends Entity implements Parsable 
{
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
        return $this->getBackingStore()->get('appHealthMetrics');
    }

    /**
     * Gets the batteryHealthMetrics property value. The user experience analytics battery health metrics.
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getBatteryHealthMetrics(): ?UserExperienceAnalyticsCategory {
        return $this->getBackingStore()->get('batteryHealthMetrics');
    }

    /**
     * Gets the bestPracticesMetrics property value. The user experience analytics best practices metrics.
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getBestPracticesMetrics(): ?UserExperienceAnalyticsCategory {
        return $this->getBackingStore()->get('bestPracticesMetrics');
    }

    /**
     * Gets the createdDateTime property value. The date the custom baseline was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the deviceBootPerformanceMetrics property value. The user experience analytics device boot performance metrics.
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getDeviceBootPerformanceMetrics(): ?UserExperienceAnalyticsCategory {
        return $this->getBackingStore()->get('deviceBootPerformanceMetrics');
    }

    /**
     * Gets the displayName property value. The name of the user experience analytics baseline.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appHealthMetrics' => fn(ParseNode $n) => $o->setAppHealthMetrics($n->getObjectValue([UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'])),
            'batteryHealthMetrics' => fn(ParseNode $n) => $o->setBatteryHealthMetrics($n->getObjectValue([UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'])),
            'bestPracticesMetrics' => fn(ParseNode $n) => $o->setBestPracticesMetrics($n->getObjectValue([UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deviceBootPerformanceMetrics' => fn(ParseNode $n) => $o->setDeviceBootPerformanceMetrics($n->getObjectValue([UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isBuiltIn' => fn(ParseNode $n) => $o->setIsBuiltIn($n->getBooleanValue()),
            'rebootAnalyticsMetrics' => fn(ParseNode $n) => $o->setRebootAnalyticsMetrics($n->getObjectValue([UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'])),
            'resourcePerformanceMetrics' => fn(ParseNode $n) => $o->setResourcePerformanceMetrics($n->getObjectValue([UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'])),
            'workFromAnywhereMetrics' => fn(ParseNode $n) => $o->setWorkFromAnywhereMetrics($n->getObjectValue([UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isBuiltIn property value. Signifies if the current baseline is the commercial median baseline or a custom baseline.
     * @return bool|null
    */
    public function getIsBuiltIn(): ?bool {
        return $this->getBackingStore()->get('isBuiltIn');
    }

    /**
     * Gets the rebootAnalyticsMetrics property value. The user experience analytics reboot analytics metrics.
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getRebootAnalyticsMetrics(): ?UserExperienceAnalyticsCategory {
        return $this->getBackingStore()->get('rebootAnalyticsMetrics');
    }

    /**
     * Gets the resourcePerformanceMetrics property value. The user experience analytics resource performance metrics.
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getResourcePerformanceMetrics(): ?UserExperienceAnalyticsCategory {
        return $this->getBackingStore()->get('resourcePerformanceMetrics');
    }

    /**
     * Gets the workFromAnywhereMetrics property value. The user experience analytics work from anywhere metrics.
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getWorkFromAnywhereMetrics(): ?UserExperienceAnalyticsCategory {
        return $this->getBackingStore()->get('workFromAnywhereMetrics');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('appHealthMetrics', $this->getAppHealthMetrics());
        $writer->writeObjectValue('batteryHealthMetrics', $this->getBatteryHealthMetrics());
        $writer->writeObjectValue('bestPracticesMetrics', $this->getBestPracticesMetrics());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('deviceBootPerformanceMetrics', $this->getDeviceBootPerformanceMetrics());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isBuiltIn', $this->getIsBuiltIn());
        $writer->writeObjectValue('rebootAnalyticsMetrics', $this->getRebootAnalyticsMetrics());
        $writer->writeObjectValue('resourcePerformanceMetrics', $this->getResourcePerformanceMetrics());
        $writer->writeObjectValue('workFromAnywhereMetrics', $this->getWorkFromAnywhereMetrics());
    }

    /**
     * Sets the appHealthMetrics property value. The user experience analytics app health metrics.
     *  @param UserExperienceAnalyticsCategory|null $value Value to set for the appHealthMetrics property.
    */
    public function setAppHealthMetrics(?UserExperienceAnalyticsCategory $value): void {
        $this->getBackingStore()->set('appHealthMetrics', $value);
    }

    /**
     * Sets the batteryHealthMetrics property value. The user experience analytics battery health metrics.
     *  @param UserExperienceAnalyticsCategory|null $value Value to set for the batteryHealthMetrics property.
    */
    public function setBatteryHealthMetrics(?UserExperienceAnalyticsCategory $value): void {
        $this->getBackingStore()->set('batteryHealthMetrics', $value);
    }

    /**
     * Sets the bestPracticesMetrics property value. The user experience analytics best practices metrics.
     *  @param UserExperienceAnalyticsCategory|null $value Value to set for the bestPracticesMetrics property.
    */
    public function setBestPracticesMetrics(?UserExperienceAnalyticsCategory $value): void {
        $this->getBackingStore()->set('bestPracticesMetrics', $value);
    }

    /**
     * Sets the createdDateTime property value. The date the custom baseline was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deviceBootPerformanceMetrics property value. The user experience analytics device boot performance metrics.
     *  @param UserExperienceAnalyticsCategory|null $value Value to set for the deviceBootPerformanceMetrics property.
    */
    public function setDeviceBootPerformanceMetrics(?UserExperienceAnalyticsCategory $value): void {
        $this->getBackingStore()->set('deviceBootPerformanceMetrics', $value);
    }

    /**
     * Sets the displayName property value. The name of the user experience analytics baseline.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isBuiltIn property value. Signifies if the current baseline is the commercial median baseline or a custom baseline.
     *  @param bool|null $value Value to set for the isBuiltIn property.
    */
    public function setIsBuiltIn(?bool $value): void {
        $this->getBackingStore()->set('isBuiltIn', $value);
    }

    /**
     * Sets the rebootAnalyticsMetrics property value. The user experience analytics reboot analytics metrics.
     *  @param UserExperienceAnalyticsCategory|null $value Value to set for the rebootAnalyticsMetrics property.
    */
    public function setRebootAnalyticsMetrics(?UserExperienceAnalyticsCategory $value): void {
        $this->getBackingStore()->set('rebootAnalyticsMetrics', $value);
    }

    /**
     * Sets the resourcePerformanceMetrics property value. The user experience analytics resource performance metrics.
     *  @param UserExperienceAnalyticsCategory|null $value Value to set for the resourcePerformanceMetrics property.
    */
    public function setResourcePerformanceMetrics(?UserExperienceAnalyticsCategory $value): void {
        $this->getBackingStore()->set('resourcePerformanceMetrics', $value);
    }

    /**
     * Sets the workFromAnywhereMetrics property value. The user experience analytics work from anywhere metrics.
     *  @param UserExperienceAnalyticsCategory|null $value Value to set for the workFromAnywhereMetrics property.
    */
    public function setWorkFromAnywhereMetrics(?UserExperienceAnalyticsCategory $value): void {
        $this->getBackingStore()->set('workFromAnywhereMetrics', $value);
    }

}
