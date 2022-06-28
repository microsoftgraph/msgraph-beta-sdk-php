<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationPowerSchoolDataProvider extends EducationSynchronizationDataProvider implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowTeachersInMultipleSchools Indicates whether the source has multiple identifiers for a single student or teacher.
    */
    private ?bool $allowTeachersInMultipleSchools = null;
    
    /**
     * @var string|null $clientId The client ID used to connect to PowerSchool.
    */
    private ?string $clientId = null;
    
    /**
     * @var string|null $clientSecret The client secret to authenticate the connection to the PowerSchool instance.
    */
    private ?string $clientSecret = null;
    
    /**
     * @var string|null $connectionUrl The connection URL to the PowerSchool instance.
    */
    private ?string $connectionUrl = null;
    
    /**
     * @var EducationSynchronizationCustomizations|null $customizations Optional customization to be applied to the synchronization profile.
    */
    private ?EducationSynchronizationCustomizations $customizations = null;
    
    /**
     * @var array<string>|null $schoolsIds The list of schools to sync.
    */
    private ?array $schoolsIds = null;
    
    /**
     * @var string|null $schoolYear The school year to sync.
    */
    private ?string $schoolYear = null;
    
    /**
     * Instantiates a new EducationPowerSchoolDataProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationPowerSchoolDataProvider
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationPowerSchoolDataProvider {
        return new EducationPowerSchoolDataProvider();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowTeachersInMultipleSchools property value. Indicates whether the source has multiple identifiers for a single student or teacher.
     * @return bool|null
    */
    public function getAllowTeachersInMultipleSchools(): ?bool {
        return $this->allowTeachersInMultipleSchools;
    }

    /**
     * Gets the clientId property value. The client ID used to connect to PowerSchool.
     * @return string|null
    */
    public function getClientId(): ?string {
        return $this->clientId;
    }

    /**
     * Gets the clientSecret property value. The client secret to authenticate the connection to the PowerSchool instance.
     * @return string|null
    */
    public function getClientSecret(): ?string {
        return $this->clientSecret;
    }

    /**
     * Gets the connectionUrl property value. The connection URL to the PowerSchool instance.
     * @return string|null
    */
    public function getConnectionUrl(): ?string {
        return $this->connectionUrl;
    }

    /**
     * Gets the customizations property value. Optional customization to be applied to the synchronization profile.
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
            'allowTeachersInMultipleSchools' => function (ParseNode $n) use ($o) { $o->setAllowTeachersInMultipleSchools($n->getBooleanValue()); },
            'clientId' => function (ParseNode $n) use ($o) { $o->setClientId($n->getStringValue()); },
            'clientSecret' => function (ParseNode $n) use ($o) { $o->setClientSecret($n->getStringValue()); },
            'connectionUrl' => function (ParseNode $n) use ($o) { $o->setConnectionUrl($n->getStringValue()); },
            'customizations' => function (ParseNode $n) use ($o) { $o->setCustomizations($n->getObjectValue(array(EducationSynchronizationCustomizations::class, 'createFromDiscriminatorValue'))); },
            'schoolsIds' => function (ParseNode $n) use ($o) { $o->setSchoolsIds($n->getCollectionOfPrimitiveValues()); },
            'schoolYear' => function (ParseNode $n) use ($o) { $o->setSchoolYear($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the schoolsIds property value. The list of schools to sync.
     * @return array<string>|null
    */
    public function getSchoolsIds(): ?array {
        return $this->schoolsIds;
    }

    /**
     * Gets the schoolYear property value. The school year to sync.
     * @return string|null
    */
    public function getSchoolYear(): ?string {
        return $this->schoolYear;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowTeachersInMultipleSchools', $this->allowTeachersInMultipleSchools);
        $writer->writeStringValue('clientId', $this->clientId);
        $writer->writeStringValue('clientSecret', $this->clientSecret);
        $writer->writeStringValue('connectionUrl', $this->connectionUrl);
        $writer->writeObjectValue('customizations', $this->customizations);
        $writer->writeCollectionOfPrimitiveValues('schoolsIds', $this->schoolsIds);
        $writer->writeStringValue('schoolYear', $this->schoolYear);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the allowTeachersInMultipleSchools property value. Indicates whether the source has multiple identifiers for a single student or teacher.
     *  @param bool|null $value Value to set for the allowTeachersInMultipleSchools property.
    */
    public function setAllowTeachersInMultipleSchools(?bool $value ): void {
        $this->allowTeachersInMultipleSchools = $value;
    }

    /**
     * Sets the clientId property value. The client ID used to connect to PowerSchool.
     *  @param string|null $value Value to set for the clientId property.
    */
    public function setClientId(?string $value ): void {
        $this->clientId = $value;
    }

    /**
     * Sets the clientSecret property value. The client secret to authenticate the connection to the PowerSchool instance.
     *  @param string|null $value Value to set for the clientSecret property.
    */
    public function setClientSecret(?string $value ): void {
        $this->clientSecret = $value;
    }

    /**
     * Sets the connectionUrl property value. The connection URL to the PowerSchool instance.
     *  @param string|null $value Value to set for the connectionUrl property.
    */
    public function setConnectionUrl(?string $value ): void {
        $this->connectionUrl = $value;
    }

    /**
     * Sets the customizations property value. Optional customization to be applied to the synchronization profile.
     *  @param EducationSynchronizationCustomizations|null $value Value to set for the customizations property.
    */
    public function setCustomizations(?EducationSynchronizationCustomizations $value ): void {
        $this->customizations = $value;
    }

    /**
     * Sets the schoolsIds property value. The list of schools to sync.
     *  @param array<string>|null $value Value to set for the schoolsIds property.
    */
    public function setSchoolsIds(?array $value ): void {
        $this->schoolsIds = $value;
    }

    /**
     * Sets the schoolYear property value. The school year to sync.
     *  @param string|null $value Value to set for the schoolYear property.
    */
    public function setSchoolYear(?string $value ): void {
        $this->schoolYear = $value;
    }

}
