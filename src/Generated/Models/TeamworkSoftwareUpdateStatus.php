<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkSoftwareUpdateStatus implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $availableVersion The available software version to update.
    */
    private ?string $availableVersion = null;
    
    /**
     * @var string|null $currentVersion The current software version.
    */
    private ?string $currentVersion = null;
    
    /**
     * @var TeamworkSoftwareFreshness|null $softwareFreshness The update status of the software. The possible values are: unknown, latest, updateAvailable, unknownFutureValue.
    */
    private ?TeamworkSoftwareFreshness $softwareFreshness = null;
    
    /**
     * Instantiates a new teamworkSoftwareUpdateStatus and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkSoftwareUpdateStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkSoftwareUpdateStatus {
        return new TeamworkSoftwareUpdateStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the availableVersion property value. The available software version to update.
     * @return string|null
    */
    public function getAvailableVersion(): ?string {
        return $this->availableVersion;
    }

    /**
     * Gets the currentVersion property value. The current software version.
     * @return string|null
    */
    public function getCurrentVersion(): ?string {
        return $this->currentVersion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'availableVersion' => function (ParseNode $n) use ($o) { $o->setAvailableVersion($n->getStringValue()); },
            'currentVersion' => function (ParseNode $n) use ($o) { $o->setCurrentVersion($n->getStringValue()); },
            'softwareFreshness' => function (ParseNode $n) use ($o) { $o->setSoftwareFreshness($n->getEnumValue(TeamworkSoftwareFreshness::class)); },
        ];
    }

    /**
     * Gets the softwareFreshness property value. The update status of the software. The possible values are: unknown, latest, updateAvailable, unknownFutureValue.
     * @return TeamworkSoftwareFreshness|null
    */
    public function getSoftwareFreshness(): ?TeamworkSoftwareFreshness {
        return $this->softwareFreshness;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('availableVersion', $this->availableVersion);
        $writer->writeStringValue('currentVersion', $this->currentVersion);
        $writer->writeEnumValue('softwareFreshness', $this->softwareFreshness);
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
     * Sets the availableVersion property value. The available software version to update.
     *  @param string|null $value Value to set for the availableVersion property.
    */
    public function setAvailableVersion(?string $value ): void {
        $this->availableVersion = $value;
    }

    /**
     * Sets the currentVersion property value. The current software version.
     *  @param string|null $value Value to set for the currentVersion property.
    */
    public function setCurrentVersion(?string $value ): void {
        $this->currentVersion = $value;
    }

    /**
     * Sets the softwareFreshness property value. The update status of the software. The possible values are: unknown, latest, updateAvailable, unknownFutureValue.
     *  @param TeamworkSoftwareFreshness|null $value Value to set for the softwareFreshness property.
    */
    public function setSoftwareFreshness(?TeamworkSoftwareFreshness $value ): void {
        $this->softwareFreshness = $value;
    }

}
