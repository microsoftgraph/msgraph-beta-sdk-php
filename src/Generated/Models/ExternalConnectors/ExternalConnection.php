<?php

namespace Microsoft\Graph\Beta\Generated\Models\ExternalConnectors;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExternalConnection extends Entity implements Parsable 
{
    /**
     * @var ActivitySettings|null $activitySettings Collects configurable settings related to activities involving connector content.
    */
    private ?ActivitySettings $activitySettings = null;
    
    /**
     * @var ComplianceSettings|null $complianceSettings The settings required for the connection to participate in eDiscovery, such as the display templates for eDiscovery results.
    */
    private ?ComplianceSettings $complianceSettings = null;
    
    /**
     * @var Configuration|null $configuration Specifies additional application IDs that are allowed to manage the connection and to index content in the connection. Optional.
    */
    private ?Configuration $configuration = null;
    
    /**
     * @var string|null $connectorId The Teams App ID. Optional.
    */
    private ?string $connectorId = null;
    
    /**
     * @var string|null $description Description of the connection displayed in the Microsoft 365 admin center. Optional.
    */
    private ?string $description = null;
    
    /**
     * @var ContentExperienceType|null $enabledContentExperiences The list of content experiences the connection will participate in. Possible values are search and compliance.
    */
    private ?ContentExperienceType $enabledContentExperiences = null;
    
    /**
     * @var array<ExternalGroup>|null $groups The groups property
    */
    private ?array $groups = null;
    
    /**
     * @var int|null $ingestedItemsCount The number of items ingested into a connection. This value is refreshed every 15 minutes. If the connection state is draft, then ingestedItemsCount will be null.
    */
    private ?int $ingestedItemsCount = null;
    
    /**
     * @var array<ExternalItem>|null $items The items property
    */
    private ?array $items = null;
    
    /**
     * @var string|null $name The display name of the connection to be displayed in the Microsoft 365 admin center. Maximum length of 128 characters. Required.
    */
    private ?string $name = null;
    
    /**
     * @var array<ConnectionOperation>|null $operations The operations property
    */
    private ?array $operations = null;
    
    /**
     * @var ConnectionQuota|null $quota The quota property
    */
    private ?ConnectionQuota $quota = null;
    
    /**
     * @var Schema|null $schema The schema property
    */
    private ?Schema $schema = null;
    
    /**
     * @var SearchSettings|null $searchSettings The settings configuring the search experience for content in this connection, such as the display templates for search results.
    */
    private ?SearchSettings $searchSettings = null;
    
    /**
     * @var ConnectionState|null $state Indicates the current state of the connection. Possible values are draft, ready, obsolete, and limitExceeded. Required.
    */
    private ?ConnectionState $state = null;
    
    /**
     * Instantiates a new ExternalConnection and sets the default values.
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
        return $this->activitySettings;
    }

    /**
     * Gets the complianceSettings property value. The settings required for the connection to participate in eDiscovery, such as the display templates for eDiscovery results.
     * @return ComplianceSettings|null
    */
    public function getComplianceSettings(): ?ComplianceSettings {
        return $this->complianceSettings;
    }

    /**
     * Gets the configuration property value. Specifies additional application IDs that are allowed to manage the connection and to index content in the connection. Optional.
     * @return Configuration|null
    */
    public function getConfiguration(): ?Configuration {
        return $this->configuration;
    }

    /**
     * Gets the connectorId property value. The Teams App ID. Optional.
     * @return string|null
    */
    public function getConnectorId(): ?string {
        return $this->connectorId;
    }

    /**
     * Gets the description property value. Description of the connection displayed in the Microsoft 365 admin center. Optional.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the enabledContentExperiences property value. The list of content experiences the connection will participate in. Possible values are search and compliance.
     * @return ContentExperienceType|null
    */
    public function getEnabledContentExperiences(): ?ContentExperienceType {
        return $this->enabledContentExperiences;
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
        return $this->groups;
    }

    /**
     * Gets the ingestedItemsCount property value. The number of items ingested into a connection. This value is refreshed every 15 minutes. If the connection state is draft, then ingestedItemsCount will be null.
     * @return int|null
    */
    public function getIngestedItemsCount(): ?int {
        return $this->ingestedItemsCount;
    }

    /**
     * Gets the items property value. The items property
     * @return array<ExternalItem>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the name property value. The display name of the connection to be displayed in the Microsoft 365 admin center. Maximum length of 128 characters. Required.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the operations property value. The operations property
     * @return array<ConnectionOperation>|null
    */
    public function getOperations(): ?array {
        return $this->operations;
    }

    /**
     * Gets the quota property value. The quota property
     * @return ConnectionQuota|null
    */
    public function getQuota(): ?ConnectionQuota {
        return $this->quota;
    }

    /**
     * Gets the schema property value. The schema property
     * @return Schema|null
    */
    public function getSchema(): ?Schema {
        return $this->schema;
    }

    /**
     * Gets the searchSettings property value. The settings configuring the search experience for content in this connection, such as the display templates for search results.
     * @return SearchSettings|null
    */
    public function getSearchSettings(): ?SearchSettings {
        return $this->searchSettings;
    }

    /**
     * Gets the state property value. Indicates the current state of the connection. Possible values are draft, ready, obsolete, and limitExceeded. Required.
     * @return ConnectionState|null
    */
    public function getState(): ?ConnectionState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('activitySettings', $this->activitySettings);
        $writer->writeObjectValue('complianceSettings', $this->complianceSettings);
        $writer->writeObjectValue('configuration', $this->configuration);
        $writer->writeStringValue('connectorId', $this->connectorId);
        $writer->writeStringValue('description', $this->description);
        $writer->writeEnumValue('enabledContentExperiences', $this->enabledContentExperiences);
        $writer->writeCollectionOfObjectValues('groups', $this->groups);
        $writer->writeIntegerValue('ingestedItemsCount', $this->ingestedItemsCount);
        $writer->writeCollectionOfObjectValues('items', $this->items);
        $writer->writeStringValue('name', $this->name);
        $writer->writeCollectionOfObjectValues('operations', $this->operations);
        $writer->writeObjectValue('quota', $this->quota);
        $writer->writeObjectValue('schema', $this->schema);
        $writer->writeObjectValue('searchSettings', $this->searchSettings);
    }

    /**
     * Sets the activitySettings property value. Collects configurable settings related to activities involving connector content.
     *  @param ActivitySettings|null $value Value to set for the activitySettings property.
    */
    public function setActivitySettings(?ActivitySettings $value ): void {
        $this->activitySettings = $value;
    }

    /**
     * Sets the complianceSettings property value. The settings required for the connection to participate in eDiscovery, such as the display templates for eDiscovery results.
     *  @param ComplianceSettings|null $value Value to set for the complianceSettings property.
    */
    public function setComplianceSettings(?ComplianceSettings $value ): void {
        $this->complianceSettings = $value;
    }

    /**
     * Sets the configuration property value. Specifies additional application IDs that are allowed to manage the connection and to index content in the connection. Optional.
     *  @param Configuration|null $value Value to set for the configuration property.
    */
    public function setConfiguration(?Configuration $value ): void {
        $this->configuration = $value;
    }

    /**
     * Sets the connectorId property value. The Teams App ID. Optional.
     *  @param string|null $value Value to set for the connectorId property.
    */
    public function setConnectorId(?string $value ): void {
        $this->connectorId = $value;
    }

    /**
     * Sets the description property value. Description of the connection displayed in the Microsoft 365 admin center. Optional.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the enabledContentExperiences property value. The list of content experiences the connection will participate in. Possible values are search and compliance.
     *  @param ContentExperienceType|null $value Value to set for the enabledContentExperiences property.
    */
    public function setEnabledContentExperiences(?ContentExperienceType $value ): void {
        $this->enabledContentExperiences = $value;
    }

    /**
     * Sets the groups property value. The groups property
     *  @param array<ExternalGroup>|null $value Value to set for the groups property.
    */
    public function setGroups(?array $value ): void {
        $this->groups = $value;
    }

    /**
     * Sets the ingestedItemsCount property value. The number of items ingested into a connection. This value is refreshed every 15 minutes. If the connection state is draft, then ingestedItemsCount will be null.
     *  @param int|null $value Value to set for the ingestedItemsCount property.
    */
    public function setIngestedItemsCount(?int $value ): void {
        $this->ingestedItemsCount = $value;
    }

    /**
     * Sets the items property value. The items property
     *  @param array<ExternalItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value ): void {
        $this->items = $value;
    }

    /**
     * Sets the name property value. The display name of the connection to be displayed in the Microsoft 365 admin center. Maximum length of 128 characters. Required.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the operations property value. The operations property
     *  @param array<ConnectionOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value ): void {
        $this->operations = $value;
    }

    /**
     * Sets the quota property value. The quota property
     *  @param ConnectionQuota|null $value Value to set for the quota property.
    */
    public function setQuota(?ConnectionQuota $value ): void {
        $this->quota = $value;
    }

    /**
     * Sets the schema property value. The schema property
     *  @param Schema|null $value Value to set for the schema property.
    */
    public function setSchema(?Schema $value ): void {
        $this->schema = $value;
    }

    /**
     * Sets the searchSettings property value. The settings configuring the search experience for content in this connection, such as the display templates for search results.
     *  @param SearchSettings|null $value Value to set for the searchSettings property.
    */
    public function setSearchSettings(?SearchSettings $value ): void {
        $this->searchSettings = $value;
    }

    /**
     * Sets the state property value. Indicates the current state of the connection. Possible values are draft, ready, obsolete, and limitExceeded. Required.
     *  @param ConnectionState|null $value Value to set for the state property.
    */
    public function setState(?ConnectionState $value ): void {
        $this->state = $value;
    }

}
