<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DailyUserInsightMetricsRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new dailyUserInsightMetricsRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DailyUserInsightMetricsRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DailyUserInsightMetricsRoot {
        return new DailyUserInsightMetricsRoot();
    }

    /**
     * Gets the activeUsers property value. The activeUsers property
     * @return array<ActiveUsersMetric>|null
    */
    public function getActiveUsers(): ?array {
        $val = $this->getBackingStore()->get('activeUsers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ActiveUsersMetric::class);
            /** @var array<ActiveUsersMetric>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeUsers'");
    }

    /**
     * Gets the activeUsersBreakdown property value. The activeUsersBreakdown property
     * @return array<ActiveUsersBreakdownMetric>|null
    */
    public function getActiveUsersBreakdown(): ?array {
        $val = $this->getBackingStore()->get('activeUsersBreakdown');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ActiveUsersBreakdownMetric::class);
            /** @var array<ActiveUsersBreakdownMetric>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeUsersBreakdown'");
    }

    /**
     * Gets the authentications property value. The authentications property
     * @return array<AuthenticationsMetric>|null
    */
    public function getAuthentications(): ?array {
        $val = $this->getBackingStore()->get('authentications');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthenticationsMetric::class);
            /** @var array<AuthenticationsMetric>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authentications'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeUsers' => fn(ParseNode $n) => $o->setActiveUsers($n->getCollectionOfObjectValues([ActiveUsersMetric::class, 'createFromDiscriminatorValue'])),
            'activeUsersBreakdown' => fn(ParseNode $n) => $o->setActiveUsersBreakdown($n->getCollectionOfObjectValues([ActiveUsersBreakdownMetric::class, 'createFromDiscriminatorValue'])),
            'authentications' => fn(ParseNode $n) => $o->setAuthentications($n->getCollectionOfObjectValues([AuthenticationsMetric::class, 'createFromDiscriminatorValue'])),
            'inactiveUsers' => fn(ParseNode $n) => $o->setInactiveUsers($n->getCollectionOfObjectValues([DailyInactiveUsersMetric::class, 'createFromDiscriminatorValue'])),
            'inactiveUsersByApplication' => fn(ParseNode $n) => $o->setInactiveUsersByApplication($n->getCollectionOfObjectValues([DailyInactiveUsersByApplicationMetric::class, 'createFromDiscriminatorValue'])),
            'mfaCompletions' => fn(ParseNode $n) => $o->setMfaCompletions($n->getCollectionOfObjectValues([MfaCompletionMetric::class, 'createFromDiscriminatorValue'])),
            'signUps' => fn(ParseNode $n) => $o->setSignUps($n->getCollectionOfObjectValues([UserSignUpMetric::class, 'createFromDiscriminatorValue'])),
            'summary' => fn(ParseNode $n) => $o->setSummary($n->getCollectionOfObjectValues([InsightSummary::class, 'createFromDiscriminatorValue'])),
            'userCount' => fn(ParseNode $n) => $o->setUserCount($n->getCollectionOfObjectValues([UserCountMetric::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the inactiveUsers property value. The inactiveUsers property
     * @return array<DailyInactiveUsersMetric>|null
    */
    public function getInactiveUsers(): ?array {
        $val = $this->getBackingStore()->get('inactiveUsers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DailyInactiveUsersMetric::class);
            /** @var array<DailyInactiveUsersMetric>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inactiveUsers'");
    }

    /**
     * Gets the inactiveUsersByApplication property value. The inactiveUsersByApplication property
     * @return array<DailyInactiveUsersByApplicationMetric>|null
    */
    public function getInactiveUsersByApplication(): ?array {
        $val = $this->getBackingStore()->get('inactiveUsersByApplication');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DailyInactiveUsersByApplicationMetric::class);
            /** @var array<DailyInactiveUsersByApplicationMetric>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inactiveUsersByApplication'");
    }

    /**
     * Gets the mfaCompletions property value. The mfaCompletions property
     * @return array<MfaCompletionMetric>|null
    */
    public function getMfaCompletions(): ?array {
        $val = $this->getBackingStore()->get('mfaCompletions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MfaCompletionMetric::class);
            /** @var array<MfaCompletionMetric>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mfaCompletions'");
    }

    /**
     * Gets the signUps property value. The signUps property
     * @return array<UserSignUpMetric>|null
    */
    public function getSignUps(): ?array {
        $val = $this->getBackingStore()->get('signUps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserSignUpMetric::class);
            /** @var array<UserSignUpMetric>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signUps'");
    }

    /**
     * Gets the summary property value. The summary property
     * @return array<InsightSummary>|null
    */
    public function getSummary(): ?array {
        $val = $this->getBackingStore()->get('summary');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, InsightSummary::class);
            /** @var array<InsightSummary>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'summary'");
    }

    /**
     * Gets the userCount property value. The userCount property
     * @return array<UserCountMetric>|null
    */
    public function getUserCount(): ?array {
        $val = $this->getBackingStore()->get('userCount');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserCountMetric::class);
            /** @var array<UserCountMetric>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('activeUsers', $this->getActiveUsers());
        $writer->writeCollectionOfObjectValues('activeUsersBreakdown', $this->getActiveUsersBreakdown());
        $writer->writeCollectionOfObjectValues('authentications', $this->getAuthentications());
        $writer->writeCollectionOfObjectValues('inactiveUsers', $this->getInactiveUsers());
        $writer->writeCollectionOfObjectValues('inactiveUsersByApplication', $this->getInactiveUsersByApplication());
        $writer->writeCollectionOfObjectValues('mfaCompletions', $this->getMfaCompletions());
        $writer->writeCollectionOfObjectValues('signUps', $this->getSignUps());
        $writer->writeCollectionOfObjectValues('summary', $this->getSummary());
        $writer->writeCollectionOfObjectValues('userCount', $this->getUserCount());
    }

    /**
     * Sets the activeUsers property value. The activeUsers property
     * @param array<ActiveUsersMetric>|null $value Value to set for the activeUsers property.
    */
    public function setActiveUsers(?array $value): void {
        $this->getBackingStore()->set('activeUsers', $value);
    }

    /**
     * Sets the activeUsersBreakdown property value. The activeUsersBreakdown property
     * @param array<ActiveUsersBreakdownMetric>|null $value Value to set for the activeUsersBreakdown property.
    */
    public function setActiveUsersBreakdown(?array $value): void {
        $this->getBackingStore()->set('activeUsersBreakdown', $value);
    }

    /**
     * Sets the authentications property value. The authentications property
     * @param array<AuthenticationsMetric>|null $value Value to set for the authentications property.
    */
    public function setAuthentications(?array $value): void {
        $this->getBackingStore()->set('authentications', $value);
    }

    /**
     * Sets the inactiveUsers property value. The inactiveUsers property
     * @param array<DailyInactiveUsersMetric>|null $value Value to set for the inactiveUsers property.
    */
    public function setInactiveUsers(?array $value): void {
        $this->getBackingStore()->set('inactiveUsers', $value);
    }

    /**
     * Sets the inactiveUsersByApplication property value. The inactiveUsersByApplication property
     * @param array<DailyInactiveUsersByApplicationMetric>|null $value Value to set for the inactiveUsersByApplication property.
    */
    public function setInactiveUsersByApplication(?array $value): void {
        $this->getBackingStore()->set('inactiveUsersByApplication', $value);
    }

    /**
     * Sets the mfaCompletions property value. The mfaCompletions property
     * @param array<MfaCompletionMetric>|null $value Value to set for the mfaCompletions property.
    */
    public function setMfaCompletions(?array $value): void {
        $this->getBackingStore()->set('mfaCompletions', $value);
    }

    /**
     * Sets the signUps property value. The signUps property
     * @param array<UserSignUpMetric>|null $value Value to set for the signUps property.
    */
    public function setSignUps(?array $value): void {
        $this->getBackingStore()->set('signUps', $value);
    }

    /**
     * Sets the summary property value. The summary property
     * @param array<InsightSummary>|null $value Value to set for the summary property.
    */
    public function setSummary(?array $value): void {
        $this->getBackingStore()->set('summary', $value);
    }

    /**
     * Sets the userCount property value. The userCount property
     * @param array<UserCountMetric>|null $value Value to set for the userCount property.
    */
    public function setUserCount(?array $value): void {
        $this->getBackingStore()->set('userCount', $value);
    }

}
