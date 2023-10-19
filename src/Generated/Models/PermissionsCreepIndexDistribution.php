<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PermissionsCreepIndexDistribution extends Entity implements Parsable 
{
    /**
     * Instantiates a new permissionsCreepIndexDistribution and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PermissionsCreepIndexDistribution
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PermissionsCreepIndexDistribution {
        return new PermissionsCreepIndexDistribution();
    }

    /**
     * Gets the authorizationSystem property value. The authorizationSystem property
     * @return AuthorizationSystem|null
    */
    public function getAuthorizationSystem(): ?AuthorizationSystem {
        $val = $this->getBackingStore()->get('authorizationSystem');
        if (is_null($val) || $val instanceof AuthorizationSystem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authorizationSystem'");
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authorizationSystem' => fn(ParseNode $n) => $o->setAuthorizationSystem($n->getObjectValue([AuthorizationSystem::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'highRiskProfile' => fn(ParseNode $n) => $o->setHighRiskProfile($n->getObjectValue([RiskProfile::class, 'createFromDiscriminatorValue'])),
            'lowRiskProfile' => fn(ParseNode $n) => $o->setLowRiskProfile($n->getObjectValue([RiskProfile::class, 'createFromDiscriminatorValue'])),
            'mediumRiskProfile' => fn(ParseNode $n) => $o->setMediumRiskProfile($n->getObjectValue([RiskProfile::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the highRiskProfile property value. The highRiskProfile property
     * @return RiskProfile|null
    */
    public function getHighRiskProfile(): ?RiskProfile {
        $val = $this->getBackingStore()->get('highRiskProfile');
        if (is_null($val) || $val instanceof RiskProfile) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'highRiskProfile'");
    }

    /**
     * Gets the lowRiskProfile property value. The lowRiskProfile property
     * @return RiskProfile|null
    */
    public function getLowRiskProfile(): ?RiskProfile {
        $val = $this->getBackingStore()->get('lowRiskProfile');
        if (is_null($val) || $val instanceof RiskProfile) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lowRiskProfile'");
    }

    /**
     * Gets the mediumRiskProfile property value. The mediumRiskProfile property
     * @return RiskProfile|null
    */
    public function getMediumRiskProfile(): ?RiskProfile {
        $val = $this->getBackingStore()->get('mediumRiskProfile');
        if (is_null($val) || $val instanceof RiskProfile) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediumRiskProfile'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('authorizationSystem', $this->getAuthorizationSystem());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('highRiskProfile', $this->getHighRiskProfile());
        $writer->writeObjectValue('lowRiskProfile', $this->getLowRiskProfile());
        $writer->writeObjectValue('mediumRiskProfile', $this->getMediumRiskProfile());
    }

    /**
     * Sets the authorizationSystem property value. The authorizationSystem property
     * @param AuthorizationSystem|null $value Value to set for the authorizationSystem property.
    */
    public function setAuthorizationSystem(?AuthorizationSystem $value): void {
        $this->getBackingStore()->set('authorizationSystem', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the highRiskProfile property value. The highRiskProfile property
     * @param RiskProfile|null $value Value to set for the highRiskProfile property.
    */
    public function setHighRiskProfile(?RiskProfile $value): void {
        $this->getBackingStore()->set('highRiskProfile', $value);
    }

    /**
     * Sets the lowRiskProfile property value. The lowRiskProfile property
     * @param RiskProfile|null $value Value to set for the lowRiskProfile property.
    */
    public function setLowRiskProfile(?RiskProfile $value): void {
        $this->getBackingStore()->set('lowRiskProfile', $value);
    }

    /**
     * Sets the mediumRiskProfile property value. The mediumRiskProfile property
     * @param RiskProfile|null $value Value to set for the mediumRiskProfile property.
    */
    public function setMediumRiskProfile(?RiskProfile $value): void {
        $this->getBackingStore()->set('mediumRiskProfile', $value);
    }

}
