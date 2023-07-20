<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Graph\Beta\Generated\Models\LongRunningOperation;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class IndustryDataRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new industryDataRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IndustryDataRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IndustryDataRoot {
        return new IndustryDataRoot();
    }

    /**
     * Gets the dataConnectors property value. Set of connectors for importing data from source systems.
     * @return array<IndustryDataConnector>|null
    */
    public function getDataConnectors(): ?array {
        $val = $this->getBackingStore()->get('dataConnectors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IndustryDataConnector::class);
            /** @var array<IndustryDataConnector>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataConnectors'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'dataConnectors' => fn(ParseNode $n) => $o->setDataConnectors($n->getCollectionOfObjectValues([IndustryDataConnector::class, 'createFromDiscriminatorValue'])),
            'inboundFlows' => fn(ParseNode $n) => $o->setInboundFlows($n->getCollectionOfObjectValues([InboundFlow::class, 'createFromDiscriminatorValue'])),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([LongRunningOperation::class, 'createFromDiscriminatorValue'])),
            'referenceDefinitions' => fn(ParseNode $n) => $o->setReferenceDefinitions($n->getCollectionOfObjectValues([ReferenceDefinition::class, 'createFromDiscriminatorValue'])),
            'roleGroups' => fn(ParseNode $n) => $o->setRoleGroups($n->getCollectionOfObjectValues([RoleGroup::class, 'createFromDiscriminatorValue'])),
            'runs' => fn(ParseNode $n) => $o->setRuns($n->getCollectionOfObjectValues([IndustryDataRun::class, 'createFromDiscriminatorValue'])),
            'sourceSystems' => fn(ParseNode $n) => $o->setSourceSystems($n->getCollectionOfObjectValues([SourceSystemDefinition::class, 'createFromDiscriminatorValue'])),
            'years' => fn(ParseNode $n) => $o->setYears($n->getCollectionOfObjectValues([YearTimePeriodDefinition::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the inboundFlows property value. Set of data import flow activities to bring data into the canonical store via a connector.
     * @return array<InboundFlow>|null
    */
    public function getInboundFlows(): ?array {
        $val = $this->getBackingStore()->get('inboundFlows');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, InboundFlow::class);
            /** @var array<InboundFlow>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inboundFlows'");
    }

    /**
     * Gets the operations property value. Set of ephemeral operations that the system runs currently. Read-only.
     * @return array<LongRunningOperation>|null
    */
    public function getOperations(): ?array {
        $val = $this->getBackingStore()->get('operations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LongRunningOperation::class);
            /** @var array<LongRunningOperation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operations'");
    }

    /**
     * Gets the referenceDefinitions property value. Set of user modifiable system picker types.
     * @return array<ReferenceDefinition>|null
    */
    public function getReferenceDefinitions(): ?array {
        $val = $this->getBackingStore()->get('referenceDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ReferenceDefinition::class);
            /** @var array<ReferenceDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'referenceDefinitions'");
    }

    /**
     * Gets the roleGroups property value. Set of groups of individual roles that makes role-based admin simpler.
     * @return array<RoleGroup>|null
    */
    public function getRoleGroups(): ?array {
        $val = $this->getBackingStore()->get('roleGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RoleGroup::class);
            /** @var array<RoleGroup>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleGroups'");
    }

    /**
     * Gets the runs property value. Set of ephemeral runs which present the point-in-time that diagnostic state of activities performed by the system. Read-only.
     * @return array<IndustryDataRun>|null
    */
    public function getRuns(): ?array {
        $val = $this->getBackingStore()->get('runs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IndustryDataRun::class);
            /** @var array<IndustryDataRun>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'runs'");
    }

    /**
     * Gets the sourceSystems property value. Set of source definitions that represents real-world external systems.
     * @return array<SourceSystemDefinition>|null
    */
    public function getSourceSystems(): ?array {
        $val = $this->getBackingStore()->get('sourceSystems');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SourceSystemDefinition::class);
            /** @var array<SourceSystemDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceSystems'");
    }

    /**
     * Gets the years property value. Set of years represented in the system.
     * @return array<YearTimePeriodDefinition>|null
    */
    public function getYears(): ?array {
        $val = $this->getBackingStore()->get('years');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, YearTimePeriodDefinition::class);
            /** @var array<YearTimePeriodDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'years'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('dataConnectors', $this->getDataConnectors());
        $writer->writeCollectionOfObjectValues('inboundFlows', $this->getInboundFlows());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
        $writer->writeCollectionOfObjectValues('referenceDefinitions', $this->getReferenceDefinitions());
        $writer->writeCollectionOfObjectValues('roleGroups', $this->getRoleGroups());
        $writer->writeCollectionOfObjectValues('runs', $this->getRuns());
        $writer->writeCollectionOfObjectValues('sourceSystems', $this->getSourceSystems());
        $writer->writeCollectionOfObjectValues('years', $this->getYears());
    }

    /**
     * Sets the dataConnectors property value. Set of connectors for importing data from source systems.
     * @param array<IndustryDataConnector>|null $value Value to set for the dataConnectors property.
    */
    public function setDataConnectors(?array $value): void {
        $this->getBackingStore()->set('dataConnectors', $value);
    }

    /**
     * Sets the inboundFlows property value. Set of data import flow activities to bring data into the canonical store via a connector.
     * @param array<InboundFlow>|null $value Value to set for the inboundFlows property.
    */
    public function setInboundFlows(?array $value): void {
        $this->getBackingStore()->set('inboundFlows', $value);
    }

    /**
     * Sets the operations property value. Set of ephemeral operations that the system runs currently. Read-only.
     * @param array<LongRunningOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

    /**
     * Sets the referenceDefinitions property value. Set of user modifiable system picker types.
     * @param array<ReferenceDefinition>|null $value Value to set for the referenceDefinitions property.
    */
    public function setReferenceDefinitions(?array $value): void {
        $this->getBackingStore()->set('referenceDefinitions', $value);
    }

    /**
     * Sets the roleGroups property value. Set of groups of individual roles that makes role-based admin simpler.
     * @param array<RoleGroup>|null $value Value to set for the roleGroups property.
    */
    public function setRoleGroups(?array $value): void {
        $this->getBackingStore()->set('roleGroups', $value);
    }

    /**
     * Sets the runs property value. Set of ephemeral runs which present the point-in-time that diagnostic state of activities performed by the system. Read-only.
     * @param array<IndustryDataRun>|null $value Value to set for the runs property.
    */
    public function setRuns(?array $value): void {
        $this->getBackingStore()->set('runs', $value);
    }

    /**
     * Sets the sourceSystems property value. Set of source definitions that represents real-world external systems.
     * @param array<SourceSystemDefinition>|null $value Value to set for the sourceSystems property.
    */
    public function setSourceSystems(?array $value): void {
        $this->getBackingStore()->set('sourceSystems', $value);
    }

    /**
     * Sets the years property value. Set of years represented in the system.
     * @param array<YearTimePeriodDefinition>|null $value Value to set for the years property.
    */
    public function setYears(?array $value): void {
        $this->getBackingStore()->set('years', $value);
    }

}
