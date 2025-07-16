<?php

namespace Microsoft\Graph\Beta\Generated\Models\HealthMonitoring;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class HealthMonitoringRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new HealthMonitoringRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HealthMonitoringRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HealthMonitoringRoot {
        return new HealthMonitoringRoot();
    }

    /**
     * Gets the alertConfigurations property value. The configuration of an alert type, which defines behavior that occurs when an alert is created.
     * @return array<AlertConfiguration>|null
    */
    public function getAlertConfigurations(): ?array {
        $val = $this->getBackingStore()->get('alertConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AlertConfiguration::class);
            /** @var array<AlertConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertConfigurations'");
    }

    /**
     * Gets the alerts property value. The collection of health monitoring system detected alerts for anomalous usage patterns found in a Microsoft Entra tenant.
     * @return array<Alert>|null
    */
    public function getAlerts(): ?array {
        $val = $this->getBackingStore()->get('alerts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Alert::class);
            /** @var array<Alert>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alerts'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alertConfigurations' => fn(ParseNode $n) => $o->setAlertConfigurations($n->getCollectionOfObjectValues([AlertConfiguration::class, 'createFromDiscriminatorValue'])),
            'alerts' => fn(ParseNode $n) => $o->setAlerts($n->getCollectionOfObjectValues([Alert::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('alertConfigurations', $this->getAlertConfigurations());
        $writer->writeCollectionOfObjectValues('alerts', $this->getAlerts());
    }

    /**
     * Sets the alertConfigurations property value. The configuration of an alert type, which defines behavior that occurs when an alert is created.
     * @param array<AlertConfiguration>|null $value Value to set for the alertConfigurations property.
    */
    public function setAlertConfigurations(?array $value): void {
        $this->getBackingStore()->set('alertConfigurations', $value);
    }

    /**
     * Sets the alerts property value. The collection of health monitoring system detected alerts for anomalous usage patterns found in a Microsoft Entra tenant.
     * @param array<Alert>|null $value Value to set for the alerts property.
    */
    public function setAlerts(?array $value): void {
        $this->getBackingStore()->set('alerts', $value);
    }

}
