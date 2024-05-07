<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MonthlyUserInsightMetricsRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new MonthlyUserInsightMetricsRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MonthlyUserInsightMetricsRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MonthlyUserInsightMetricsRoot {
        return new MonthlyUserInsightMetricsRoot();
    }

    /**
     * Gets the activeUsers property value. Insights for active users on apps registered in the tenant for a specified period.
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
     * Gets the authentications property value. Insights for authentications on apps registered in the tenant for a specified period.
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
            'authentications' => fn(ParseNode $n) => $o->setAuthentications($n->getCollectionOfObjectValues([AuthenticationsMetric::class, 'createFromDiscriminatorValue'])),
            'inactiveUsers' => fn(ParseNode $n) => $o->setInactiveUsers($n->getCollectionOfObjectValues([MonthlyInactiveUsersMetric::class, 'createFromDiscriminatorValue'])),
            'inactiveUsersByApplication' => fn(ParseNode $n) => $o->setInactiveUsersByApplication($n->getCollectionOfObjectValues([MonthlyInactiveUsersByApplicationMetric::class, 'createFromDiscriminatorValue'])),
            'mfaCompletions' => fn(ParseNode $n) => $o->setMfaCompletions($n->getCollectionOfObjectValues([MfaCompletionMetric::class, 'createFromDiscriminatorValue'])),
            'requests' => fn(ParseNode $n) => $o->setRequests($n->getCollectionOfObjectValues([UserRequestsMetric::class, 'createFromDiscriminatorValue'])),
            'signUps' => fn(ParseNode $n) => $o->setSignUps($n->getCollectionOfObjectValues([UserSignUpMetric::class, 'createFromDiscriminatorValue'])),
            'summary' => fn(ParseNode $n) => $o->setSummary($n->getCollectionOfObjectValues([InsightSummary::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the inactiveUsers property value. The inactiveUsers property
     * @return array<MonthlyInactiveUsersMetric>|null
    */
    public function getInactiveUsers(): ?array {
        $val = $this->getBackingStore()->get('inactiveUsers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MonthlyInactiveUsersMetric::class);
            /** @var array<MonthlyInactiveUsersMetric>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inactiveUsers'");
    }

    /**
     * Gets the inactiveUsersByApplication property value. The inactiveUsersByApplication property
     * @return array<MonthlyInactiveUsersByApplicationMetric>|null
    */
    public function getInactiveUsersByApplication(): ?array {
        $val = $this->getBackingStore()->get('inactiveUsersByApplication');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MonthlyInactiveUsersByApplicationMetric::class);
            /** @var array<MonthlyInactiveUsersByApplicationMetric>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inactiveUsersByApplication'");
    }

    /**
     * Gets the mfaCompletions property value. Insights for MFA usage on apps registered in the tenant for a specified period.
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
     * Gets the requests property value. Insights for all user requests on apps registered in the tenant for a specified period.
     * @return array<UserRequestsMetric>|null
    */
    public function getRequests(): ?array {
        $val = $this->getBackingStore()->get('requests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserRequestsMetric::class);
            /** @var array<UserRequestsMetric>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requests'");
    }

    /**
     * Gets the signUps property value. Total sign-ups on apps registered in the tenant for a specified period.
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
     * Gets the summary property value. Summary of all usage insights on apps registered in the tenant for a specified period.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('activeUsers', $this->getActiveUsers());
        $writer->writeCollectionOfObjectValues('authentications', $this->getAuthentications());
        $writer->writeCollectionOfObjectValues('inactiveUsers', $this->getInactiveUsers());
        $writer->writeCollectionOfObjectValues('inactiveUsersByApplication', $this->getInactiveUsersByApplication());
        $writer->writeCollectionOfObjectValues('mfaCompletions', $this->getMfaCompletions());
        $writer->writeCollectionOfObjectValues('requests', $this->getRequests());
        $writer->writeCollectionOfObjectValues('signUps', $this->getSignUps());
        $writer->writeCollectionOfObjectValues('summary', $this->getSummary());
    }

    /**
     * Sets the activeUsers property value. Insights for active users on apps registered in the tenant for a specified period.
     * @param array<ActiveUsersMetric>|null $value Value to set for the activeUsers property.
    */
    public function setActiveUsers(?array $value): void {
        $this->getBackingStore()->set('activeUsers', $value);
    }

    /**
     * Sets the authentications property value. Insights for authentications on apps registered in the tenant for a specified period.
     * @param array<AuthenticationsMetric>|null $value Value to set for the authentications property.
    */
    public function setAuthentications(?array $value): void {
        $this->getBackingStore()->set('authentications', $value);
    }

    /**
     * Sets the inactiveUsers property value. The inactiveUsers property
     * @param array<MonthlyInactiveUsersMetric>|null $value Value to set for the inactiveUsers property.
    */
    public function setInactiveUsers(?array $value): void {
        $this->getBackingStore()->set('inactiveUsers', $value);
    }

    /**
     * Sets the inactiveUsersByApplication property value. The inactiveUsersByApplication property
     * @param array<MonthlyInactiveUsersByApplicationMetric>|null $value Value to set for the inactiveUsersByApplication property.
    */
    public function setInactiveUsersByApplication(?array $value): void {
        $this->getBackingStore()->set('inactiveUsersByApplication', $value);
    }

    /**
     * Sets the mfaCompletions property value. Insights for MFA usage on apps registered in the tenant for a specified period.
     * @param array<MfaCompletionMetric>|null $value Value to set for the mfaCompletions property.
    */
    public function setMfaCompletions(?array $value): void {
        $this->getBackingStore()->set('mfaCompletions', $value);
    }

    /**
     * Sets the requests property value. Insights for all user requests on apps registered in the tenant for a specified period.
     * @param array<UserRequestsMetric>|null $value Value to set for the requests property.
    */
    public function setRequests(?array $value): void {
        $this->getBackingStore()->set('requests', $value);
    }

    /**
     * Sets the signUps property value. Total sign-ups on apps registered in the tenant for a specified period.
     * @param array<UserSignUpMetric>|null $value Value to set for the signUps property.
    */
    public function setSignUps(?array $value): void {
        $this->getBackingStore()->set('signUps', $value);
    }

    /**
     * Sets the summary property value. Summary of all usage insights on apps registered in the tenant for a specified period.
     * @param array<InsightSummary>|null $value Value to set for the summary property.
    */
    public function setSummary(?array $value): void {
        $this->getBackingStore()->set('summary', $value);
    }

}
