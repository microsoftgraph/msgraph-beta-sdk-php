<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationOneRosterApiDataProvider extends EducationSynchronizationDataProvider implements Parsable 
{
    /**
     * @var EducationSynchronizationConnectionSettings|null $connectionSettings The connectionSettings property
    */
    private ?EducationSynchronizationConnectionSettings $connectionSettings = null;
    
    /**
     * @var string|null $connectionUrl The connectionUrl property
    */
    private ?string $connectionUrl = null;
    
    /**
     * @var EducationSynchronizationCustomizations|null $customizations The customizations property
    */
    private ?EducationSynchronizationCustomizations $customizations = null;
    
    /**
     * @var string|null $providerName The providerName property
    */
    private ?string $providerName = null;
    
    /**
     * @var array<string>|null $schoolsIds The schoolsIds property
    */
    private ?array $schoolsIds = null;
    
    /**
     * @var array<string>|null $termIds The termIds property
    */
    private ?array $termIds = null;
    
    /**
     * Instantiates a new EducationOneRosterApiDataProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationOneRosterApiDataProvider');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationOneRosterApiDataProvider
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationOneRosterApiDataProvider {
        return new EducationOneRosterApiDataProvider();
    }

    /**
     * Gets the connectionSettings property value. The connectionSettings property
     * @return EducationSynchronizationConnectionSettings|null
    */
    public function getConnectionSettings(): ?EducationSynchronizationConnectionSettings {
        return $this->connectionSettings;
    }

    /**
     * Gets the connectionUrl property value. The connectionUrl property
     * @return string|null
    */
    public function getConnectionUrl(): ?string {
        return $this->connectionUrl;
    }

    /**
     * Gets the customizations property value. The customizations property
     * @return EducationSynchronizationCustomizations|null
    */
    public function getCustomizations(): ?EducationSynchronizationCustomizations {
        return $this->customizations;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'connectionSettings' => fn(ParseNode $n) => $o->setConnectionSettings($n->getObjectValue([EducationSynchronizationConnectionSettings::class, 'createFromDiscriminatorValue'])),
            'connectionUrl' => fn(ParseNode $n) => $o->setConnectionUrl($n->getStringValue()),
            'customizations' => fn(ParseNode $n) => $o->setCustomizations($n->getObjectValue([EducationSynchronizationCustomizations::class, 'createFromDiscriminatorValue'])),
            'providerName' => fn(ParseNode $n) => $o->setProviderName($n->getStringValue()),
            'schoolsIds' => fn(ParseNode $n) => $o->setSchoolsIds($n->getCollectionOfPrimitiveValues()),
            'termIds' => fn(ParseNode $n) => $o->setTermIds($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the providerName property value. The providerName property
     * @return string|null
    */
    public function getProviderName(): ?string {
        return $this->providerName;
    }

    /**
     * Gets the schoolsIds property value. The schoolsIds property
     * @return array<string>|null
    */
    public function getSchoolsIds(): ?array {
        return $this->schoolsIds;
    }

    /**
     * Gets the termIds property value. The termIds property
     * @return array<string>|null
    */
    public function getTermIds(): ?array {
        return $this->termIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('connectionSettings', $this->connectionSettings);
        $writer->writeStringValue('connectionUrl', $this->connectionUrl);
        $writer->writeObjectValue('customizations', $this->customizations);
        $writer->writeStringValue('providerName', $this->providerName);
        $writer->writeCollectionOfPrimitiveValues('schoolsIds', $this->schoolsIds);
        $writer->writeCollectionOfPrimitiveValues('termIds', $this->termIds);
    }

    /**
     * Sets the connectionSettings property value. The connectionSettings property
     *  @param EducationSynchronizationConnectionSettings|null $value Value to set for the connectionSettings property.
    */
    public function setConnectionSettings(?EducationSynchronizationConnectionSettings $value ): void {
        $this->connectionSettings = $value;
    }

    /**
     * Sets the connectionUrl property value. The connectionUrl property
     *  @param string|null $value Value to set for the connectionUrl property.
    */
    public function setConnectionUrl(?string $value ): void {
        $this->connectionUrl = $value;
    }

    /**
     * Sets the customizations property value. The customizations property
     *  @param EducationSynchronizationCustomizations|null $value Value to set for the customizations property.
    */
    public function setCustomizations(?EducationSynchronizationCustomizations $value ): void {
        $this->customizations = $value;
    }

    /**
     * Sets the providerName property value. The providerName property
     *  @param string|null $value Value to set for the providerName property.
    */
    public function setProviderName(?string $value ): void {
        $this->providerName = $value;
    }

    /**
     * Sets the schoolsIds property value. The schoolsIds property
     *  @param array<string>|null $value Value to set for the schoolsIds property.
    */
    public function setSchoolsIds(?array $value ): void {
        $this->schoolsIds = $value;
    }

    /**
     * Sets the termIds property value. The termIds property
     *  @param array<string>|null $value Value to set for the termIds property.
    */
    public function setTermIds(?array $value ): void {
        $this->termIds = $value;
    }

}
