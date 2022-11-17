<?php

namespace Microsoft\Graph\Beta\Generated\Models\ExternalConnectors;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExternalConnection extends Entity implements Parsable 
{
    /**
     * Instantiates a new externalConnection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.externalConnectors.externalConnection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExternalConnection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExternalConnection {
        return new ExternalConnection();
    }

    /**
     * Gets the activitySettings property value. Collects configurable settings related to activities involving connector content.
     * @return ActivitySettings|null
    */
    public function getActivitySettings(): ?ActivitySettings {
        return $this->getBackingStore()->get('activitySettings');
    }

    /**
     * Gets the complianceSettings property value. The settings required for the connection to participate in eDiscovery, such as the display templates for eDiscovery results.
     * @return ComplianceSettings|null
    */
    public function getComplianceSettings(): ?ComplianceSettings {
        return $this->getBackingStore()->get('complianceSettings');
    }

    /**
     * Gets the configuration property value. Specifies additional application IDs that are allowed to manage the connection and to index content in the connection. Optional.
     * @return Configuration|null
    */
    public function getConfiguration(): ?Configuration {
        return $this->getBackingStore()->get('configuration');
    }

    /**
     * Gets the connectorId property value. The Teams App ID. Optional.
     * @return string|null
    */
    public function getConnectorId(): ?string {
        return $this->getBackingStore()->get('connectorId');
    }

    /**
     * Gets the description property value. Description of the connection displayed in the Microsoft 365 admin center. Optional.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the enabledContentExperiences property value. The list of content experiences the connection will participate in. Possible values are search and compliance.
     * @return ContentExperienceType|null
    */
    public function getEnabledContentExperiences(): ?ContentExperienceType {
        return $this->getBackingStore()->get('enabledContentExperiences');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activitySettings' => fn(ParseNode $n) => $o->setActivitySettings($n->getObjectValue([ActivitySettings::class, 'createFromDiscriminatorValue'])),
            'complianceSettings' => fn(ParseNode $n) => $o->setComplianceSettings($n->getObjectValue([ComplianceSettings::class, 'createFromDiscriminatorValue'])),
            'configuration' => fn(ParseNode $n) => $o->setConfiguration($n->getObjectValue([Configuration::class, 'createFromDiscriminatorValue'])),
            'connectorId' => fn(ParseNode $n) => $o->setConnectorId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'enabledContentExperiences' => fn(ParseNode $n) => $o->setEnabledContentExperiences($n->getEnumValue(ContentExperienceType::class)),
            'groups' => fn(ParseNode $n) => $o->setGroups($n->getCollectionOfObjectValues([ExternalGroup::class, 'createFromDiscriminatorValue'])),
            'ingestedItemsCount' => fn(ParseNode $n) => $o->setIngestedItemsCount($n->getIntegerValue()),
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([ExternalItem::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([ConnectionOperation::class, 'createFromDiscriminatorValue'])),
            'quota' => fn(ParseNode $n) => $o->setQuota($n->getObjectValue([ConnectionQuota::class, 'createFromDiscriminatorValue'])),
            'schema' => fn(ParseNode $n) => $o->setSchema($n->getObjectValue([Schema::class, 'createFromDiscriminatorValue'])),
            'searchSettings' => fn(ParseNode $n) => $o->setSearchSettings($n->getObjectValue([SearchSettings::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(ConnectionState::class)),
        ]);
    }

    /**
     * Gets the groups property value. The groups property
     * @return array<ExternalGroup>|null
    */
    public function getGroups(): ?array {
        return $this->getBackingStore()->get('groups');
    }

    /**
     * Gets the ingestedItemsCount property value. The number of items ingested into a connection. This value is refreshed every 15 minutes. If the connection state is draft, then ingestedItemsCount will be null.
     * @return int|null
    */
    public function getIngestedItemsCount(): ?int {
        return $this->getBackingStore()->get('ingestedItemsCount');
    }

    /**
     * Gets the items property value. The items property
     * @return array<ExternalItem>|null
    */
    public function getItems(): ?array {
        return $this->getBackingStore()->get('items');
    }

    /**
     * Gets the name property value. The display name of the connection to be displayed in the Microsoft 365 admin center. Maximum length of 128 characters. Required.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the operations property value. The operations property
     * @return array<ConnectionOperation>|null
    */
    public function getOperations(): ?array {
        return $this->getBackingStore()->get('operations');
    }

    /**
     * Gets the quota property value. The quota property
     * @return ConnectionQuota|null
    */
    public function getQuota(): ?ConnectionQuota {
        return $this->getBackingStore()->get('quota');
    }

    /**
     * Gets the schema property value. The schema property
     * @return Schema|null
    */
    public function getSchema(): ?Schema {
        return $this->getBackingStore()->get('schema');
    }

    /**
     * Gets the searchSettings property value. The settings configuring the search experience for content in this connection, such as the display templates for search results.
     * @return SearchSettings|null
    */
    public function getSearchSettings(): ?SearchSettings {
        return $this->getBackingStore()->get('searchSettings');
    }

    /**
     * Gets the state property value. Indicates the current state of the connection. Possible values are draft, ready, obsolete, and limitExceeded. Required.
     * @return ConnectionState|null
    */
    public function getState(): ?ConnectionState {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('activitySettings', $this->getActivitySettings());
        $writer->writeObjectValue('complianceSettings', $this->getComplianceSettings());
        $writer->writeObjectValue('configuration', $this->getConfiguration());
        $writer->writeStringValue('connectorId', $this->getConnectorId());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeEnumValue('enabledContentExperiences', $this->getEnabledContentExperiences());
        $writer->writeCollectionOfObjectValues('groups', $this->getGroups());
        $writer->writeIntegerValue('ingestedItemsCount', $this->getIngestedItemsCount());
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
        $writer->writeObjectValue('quota', $this->getQuota());
        $writer->writeObjectValue('schema', $this->getSchema());
        $writer->writeObjectValue('searchSettings', $this->getSearchSettings());
    }

    /**
     * Sets the activitySettings property value. Collects configurable settings related to activities involving connector content.
     *  @param ActivitySettings|null $value Value to set for the activitySettings property.
    */
    public function setActivitySettings(?ActivitySettings $value): void {
        $this->getBackingStore()->set('activitySettings', $value);
    }

    /**
     * Sets the complianceSettings property value. The settings required for the connection to participate in eDiscovery, such as the display templates for eDiscovery results.
     *  @param ComplianceSettings|null $value Value to set for the complianceSettings property.
    */
    public function setComplianceSettings(?ComplianceSettings $value): void {
        $this->getBackingStore()->set('complianceSettings', $value);
    }

    /**
     * Sets the configuration property value. Specifies additional application IDs that are allowed to manage the connection and to index content in the connection. Optional.
     *  @param Configuration|null $value Value to set for the configuration property.
    */
    public function setConfiguration(?Configuration $value): void {
        $this->getBackingStore()->set('configuration', $value);
    }

    /**
     * Sets the connectorId property value. The Teams App ID. Optional.
     *  @param string|null $value Value to set for the connectorId property.
    */
    public function setConnectorId(?string $value): void {
        $this->getBackingStore()->set('connectorId', $value);
    }

    /**
     * Sets the description property value. Description of the connection displayed in the Microsoft 365 admin center. Optional.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the enabledContentExperiences property value. The list of content experiences the connection will participate in. Possible values are search and compliance.
     *  @param ContentExperienceType|null $value Value to set for the enabledContentExperiences property.
    */
    public function setEnabledContentExperiences(?ContentExperienceType $value): void {
        $this->getBackingStore()->set('enabledContentExperiences', $value);
    }

    /**
     * Sets the groups property value. The groups property
     *  @param array<ExternalGroup>|null $value Value to set for the groups property.
    */
    public function setGroups(?array $value): void {
        $this->getBackingStore()->set('groups', $value);
    }

    /**
     * Sets the ingestedItemsCount property value. The number of items ingested into a connection. This value is refreshed every 15 minutes. If the connection state is draft, then ingestedItemsCount will be null.
     *  @param int|null $value Value to set for the ingestedItemsCount property.
    */
    public function setIngestedItemsCount(?int $value): void {
        $this->getBackingStore()->set('ingestedItemsCount', $value);
    }

    /**
     * Sets the items property value. The items property
     *  @param array<ExternalItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->getBackingStore()->set('items', $value);
    }

    /**
     * Sets the name property value. The display name of the connection to be displayed in the Microsoft 365 admin center. Maximum length of 128 characters. Required.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the operations property value. The operations property
     *  @param array<ConnectionOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

    /**
     * Sets the quota property value. The quota property
     *  @param ConnectionQuota|null $value Value to set for the quota property.
    */
    public function setQuota(?ConnectionQuota $value): void {
        $this->getBackingStore()->set('quota', $value);
    }

    /**
     * Sets the schema property value. The schema property
     *  @param Schema|null $value Value to set for the schema property.
    */
    public function setSchema(?Schema $value): void {
        $this->getBackingStore()->set('schema', $value);
    }

    /**
     * Sets the searchSettings property value. The settings configuring the search experience for content in this connection, such as the display templates for search results.
     *  @param SearchSettings|null $value Value to set for the searchSettings property.
    */
    public function setSearchSettings(?SearchSettings $value): void {
        $this->getBackingStore()->set('searchSettings', $value);
    }

    /**
     * Sets the state property value. Indicates the current state of the connection. Possible values are draft, ready, obsolete, and limitExceeded. Required.
     *  @param ConnectionState|null $value Value to set for the state property.
    */
    public function setState(?ConnectionState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
