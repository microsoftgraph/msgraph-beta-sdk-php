<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Notify-only alert configuration for a spending policy. Each policy has at most one,retrieved from its own URL beneath the policy.
*/
class CostManagementAlertSetting extends Entity implements Parsable 
{
    /**
     * Instantiates a new CostManagementAlertSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CostManagementAlertSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CostManagementAlertSetting {
        return new CostManagementAlertSetting();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'recipients' => fn(ParseNode $n) => $o->setRecipients($n->getCollectionOfObjectValues([User::class, 'createFromDiscriminatorValue'])),
            'thresholds' => fn(ParseNode $n) => $o->setThresholds($n->getCollectionOfObjectValues([CostManagementAlertThreshold::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isEnabled property value. Whether alerting is enabled.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
    }

    /**
     * Gets the recipients property value. The directory users notified when a threshold is crossed. The address is resolved at sendtime, so a recipient survives a mailbox change. Managed with $ref add and remove. Areference that does not resolve to a user in the tenant is rejected withalertRecipientNotFound.
     * @return array<User>|null
    */
    public function getRecipients(): ?array {
        $val = $this->getBackingStore()->get('recipients');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, User::class);
            /** @var array<User>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipients'");
    }

    /**
     * Gets the thresholds property value. The configured thresholds.
     * @return array<CostManagementAlertThreshold>|null
    */
    public function getThresholds(): ?array {
        $val = $this->getBackingStore()->get('thresholds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CostManagementAlertThreshold::class);
            /** @var array<CostManagementAlertThreshold>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'thresholds'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeCollectionOfObjectValues('recipients', $this->getRecipients());
        $writer->writeCollectionOfObjectValues('thresholds', $this->getThresholds());
    }

    /**
     * Sets the isEnabled property value. Whether alerting is enabled.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the recipients property value. The directory users notified when a threshold is crossed. The address is resolved at sendtime, so a recipient survives a mailbox change. Managed with $ref add and remove. Areference that does not resolve to a user in the tenant is rejected withalertRecipientNotFound.
     * @param array<User>|null $value Value to set for the recipients property.
    */
    public function setRecipients(?array $value): void {
        $this->getBackingStore()->set('recipients', $value);
    }

    /**
     * Sets the thresholds property value. The configured thresholds.
     * @param array<CostManagementAlertThreshold>|null $value Value to set for the thresholds property.
    */
    public function setThresholds(?array $value): void {
        $this->getBackingStore()->set('thresholds', $value);
    }

}
